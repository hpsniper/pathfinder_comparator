<?php

require_once 'classes.php';

class CharacterBuilder {

    private function build_character_array($character_classes) {
        $character = array();
        $builder = new ClassesBuilder();
        $classes = $builder->getClasses();
        foreach($character_classes as $name => $level) {
            $index = $level-1;
            foreach($classes[$name] as $attribute => $value) {
                if($attribute == 'glossary') {
                    $character[$attribute] = isset($character[$attribute]) ? $character[$attribute] + $value : $value;
                } else if(isset($character[$attribute])) {
                    $character[$attribute] += $value[$index];
                } else {
                    $character[$attribute] = $value[$index];
                }
            }
        }

        return $character;
    }

    private function character_to_string($character_array) {
        $glossary = $character_array['glossary'];
        $string = "";
        foreach($character_array as $attribute => $value) {
            if($attribute == 'glossary' || !$value) {
                continue;
            }
            $gloss_entry = isset($glossary[$attribute]) ? "\t// ".$glossary[$attribute] : '';
            $string .= "$attribute: $value $gloss_entry\n";
        }

        return $string;
    }

    public function print_character($description) {
        $character_array = $this->build_character_array($description);
        foreach($description as $name => $level) {
            echo "$name $level | ";
        }
        echo "\n";
        echo $this->character_to_string($character_array);
    }

    public function compare_characters($array_of_characters) {
        $abilities = array();
        $char_arrays = array();
        $html = "<html>\n<table border=\"1px solid\">\n\t<tr>\n\t\t<th>Ability</th>";
        foreach($array_of_characters as $character) {
            $char_array = $this->build_character_array($character);
            $char_arrays[] = $char_array;
            $abilities = array_unique(array_merge($abilities, array_keys($char_array)));
            $title = $this->get_character_title($character);
            $html .= "<th>".$title."</th>";
        }

        $html .= "<th>Glossary</th>\n\t</tr>";

        foreach($abilities as $ability) {
            if($ability == 'glossary')  {
                continue;
            }

            $glossary_entry = 'N/A';
            $row_html = "\n\t<tr>\n\t\t<td>$ability</td>";
            $print_row = false;

            foreach($char_arrays as $char_array) {
                $val = 'N/A';
                if(isset($char_array[$ability])) {
                    $val = $char_array[$ability];
                    $print_row = true;
                }
                if(isset($char_array['glossary']) && isset($char_array['glossary'][$ability])) {
                    $glossary_entry = $char_array['glossary'][$ability];
                }

                $row_html .= "<td>$val</td>";
            }

            if($print_row) {
                $html .= $row_html."<td>$glossary_entry</td>\n\t</tr>";
            }
        }

        $html .= "\n</table>\n</html>";

        return $html;
    }

    private function get_character_title($char) {
        $out = array();
        foreach($char as $title => $level) {
            $out[] = "$title: $level";
        }
        return join('<br>',$out);
    }

}

$cBuilder = new CharacterBuilder();
$a = array('Fighter' => 2, 'Skald' => 15);
$b = array('Fighter' => 1, 'Skald' => 16);
$c = array('Skald' => 17);
//$b = array('Fighter: Tower Shield Specialist' => 20);
//$c = array('Fighter' => 7, 'Rogue' => 13);
//$d = array('Inquisitor' => 13, 'Rogue' => 7);
//$e = array('Inquisitor' => 12, 'Rogue' => 8);
//$cBuilder->print_character($a);
//echo "\n";
//$cBuilder->print_character($b);
//echo "\n";
$fh = fopen('www/compare.html', 'w+');
fwrite($fh, $cBuilder->compare_characters(array($a, $b, $c)));
fclose($fh);
