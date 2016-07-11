<?php

class ClassesBuilder {

    private $built = false;

    private $classes = array (
        /* 
         * Core Classes 
         */

        // Fighter
        'Fighter' => array (            // 01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20
            'hp'  =>                array ( 5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100),
            'bab'  =>               array ( 1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12,13,14,15,16,17,18,19,20),
            'fort' =>               array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'ref'  =>               array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'will'  =>              array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'bravery' =>            array ( 0, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5),
            'combat feats' =>       array ( 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11),
            'armor training' =>     array ( 0, 0, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4),
            'weapon training' =>    array ( 0, 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4),
            'armor mastery' =>      array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1),
            'weapon mastery' =>     array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
            'glossary' => array (
                'bravery' => '+1 will vs fear',
                'armor training' => '+1 max dex and ACP. No reduced movement for medium armor @+1, heavy armor @+2',
                'weapon training' => '+1 atk and dmg for 1 weapon new weapon type and all previously choosen weapon types',
                'armor mastery' => 'DR 5/ when using armor or shield',
                'weapon mastery' => 'Increase crit multiplier and auto-confirm with 1 weapon'
            )
        ),
        // Rogue
        'Rogue' => array (              // 01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20
            'hp'  =>                array ( 4, 8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80),
            'bab'  =>               array ( 0, 1, 2, 3, 3, 4, 5, 6, 6, 7, 8, 9, 9,10,11,12,12,13,14,15),
            'fort' =>               array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'ref'  =>               array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'will'  =>              array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'sneak attack' =>       array ( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10),
            'trapfinding' =>        array ( 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10),
            'rogue talent' =>       array ( 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10),
            'evasion' =>            array ( 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'trap sense' =>         array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'uncanny dodge' =>      array ( 0, 0, 0, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
            'advanced talent' =>    array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'master strike' =>      array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
            'glossary' => array (
                'sneak attack' => '+1d6 precision damage',
                'trapfinding' => '+1/2 level to Perception & Disable Device checks dealin with traps. (minimum +1). Can use Disable Device to disarm magic traps.',
                'rogue talent' => 'Talents granting rogues special abilities',
                'evasion' => 'take no damage on successful reflex save where you would normally still take 1/2 damage',
                'trap sense' => '+1 on Reflex and dodge bonus vs traps',
                'uncanny dodge' => 'Cannot be caught flat-footed, nor can be denied dex bonus becauase of invisibility. @2 cannot be flanked. (Unless attacker posses 4 more levels than the target)',
                'advanced talent' => 'Access to advanced rogue talents',
                'master strike' => 'Choose one of 3 on sneak attack: put to sleep for 1d4 hours; paralyze for 2d6 rounds; slain; DC = 20+int modifier'
            )
        ),
        /* 
         * Base Classes 
         */

        // Inquisitor TODO Finish
        'Inquisitor' => array (         // 01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20
            'hp'  =>                array ( 4, 8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80),
            'bab'  =>               array ( 0, 1, 2, 3, 3, 4, 5, 6, 6, 7, 8, 9, 9,10,11,12,12,13,14,15),
            'fort' =>               array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'ref'  =>               array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'will'  =>              array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'domain' =>             array ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'judgment' =>           array ( 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7),
              // List of judgements and bonuses for those judgements at level
              'ju: destruction' =>  array ( 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7, 7),
              'ju: healing' =>      array ( 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7, 7),
              'ju: justice' =>      array ( 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 5),
              'ju: piercing' =>     array ( 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7, 7),
              'ju: protection' =>   array ( 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 5),
              'ju: purity' =>       array ( 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 5),
              'ju: resiliency' =>   array ( 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 5),
              'ju: resistance' =>   array ( 2, 2, 3, 3, 3, 6, 6, 6, 8, 8, 8,10,10,10,12,12,12,14,14,14),
              'ju: smiting' =>      array ( 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
            'monster lore' =>       array ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'stern gaze' =>         array ( 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10),
            'cunning initiative' => array ( 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'detect alignment' =>   array ( 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'track' =>              array ( 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10),
            'solo tactics' =>       array ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'teamwork feat' =>      array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'bane' =>               array ( 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'discern lies' =>       array ( 0, 0, 0, 0, 5, 6, 7, 8, 9,10,11,12,13,14,15,16,17,18,19,20),
            'second judgment' =>    array ( 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'stalwart' =>           array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'greater bane' =>       array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'exploit weakness' =>   array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1),
            'third judgment' =>     array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1),
            'slayer' =>             array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1),
            'true judgment' =>      array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
            'glossary' => array (
                'domain' => 'Select 1 domain belonging to choosen deity. Can select an alignment domain if she matches that alignment. The inquisitor gains bonus abilities but not spells or spell slots from the domain using Inqusitor level as effective cleric level. Levels of Cleric and Inquisitor stack for the puproses of abilities but not spells. (An inquisition can be selected instead of a domain)',
                'cantrips' => '0-level spells known. These spells are cast like any other spell, but they do not consume any slots and may be used again.',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
                '' => '',
            )
        ),
        /* 
         * Hybrid Classes 
         */

        // Skald
        'Skald' => array (                  // 01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20
            'hp'  =>                    array ( 4, 8,12,16,20,24,28,32,36,40,44,48,52,56,60,64,68,72,76,80),
            'bab'  =>                   array ( 0, 1, 2, 3, 3, 4, 5, 6, 6, 7, 8, 9, 9,10,11,12,12,13,14,15),
            'fort' =>                   array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'ref'  =>                   array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'will' =>                   array ( 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10,10,11,11,12),
            'bardic knowledge' =>       array ( 1, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9,10),
            'cantrips' =>               array ( 4, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6),
            'inspired rage' =>          array ( 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5, 6),
            'raging song' =>            array ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'scribe scroll' =>          array ( 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'versitile performance' =>  array ( 0, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 4, 4, 4, 4),
            'well versed' =>            array ( 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
            'rage power' =>             array ( 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6),
            'glossary' => array (
                'bardic knowledge' => 'Add 1/2 class level (min 1) on all Knowledge skill checks, and may make all Knowledge skill checks untrained.',
                'cantrips' => '0-level spells known. These spells are cast like any other spell, but they do not consume any slots and may be used again.',
                'inspired rage' => '<a href="http://www.d20pfsrd.com/classes/hybrid-classes/skald#TOC-Raging-Song-Su-">Inspired Rage</a>',
                'raging song' => '<a href="http://www.d20pfsrd.com/classes/hybrid-classes/skald#TOC-Raging-Song-Su-">Raging Song</a>',
                'scribe scroll' => 'Create a scroll of any spell that you know. It takes 2 hours if its base price is 250 gp or less, otherwise it takes 1 day for each 1,000 gp in its base price. Must use up raw materials costing half of the spell\'s base price.',
                'versitile performance' => 'Choose one type of Perform skill and use the bonus in that skill in place of the bonus in the associated skills listed below. At 7th level, and every 5 levels thereafter, the bard can select an additional type of Perform to substitute.<br>Oratory (Diplomacy, Sense Motive), Percussion (Handle Animal, Intimidate), Sing (Bluff, Sense Motive), String (Bluff, Diplomacy), and Wind (Diplomacy, Handle Animal).',
                'well versed' => 'Gain a +4 bonus on saves made vs bardic performance, and all sonic or language-dependent effects.',
                'rage power' => 'Look it up'
            )
        ),
    );

    private $archetypes = array (
        array(
            'baseclass' => 'Fighter',
            'name' => 'Tower Shield Specialist',
            'unsets' => array ('bravery', 'armor training', 'weapon training', 'weapon mastery'),
            'sets' => array(
                                                    // 01 02 03 04 05 06 07 08 09 10 11 12 13 14 15 16 17 18 19 20
                'burst barrier' =>              array ( 0, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5),
                'tower shield training' =>      array ( 0, 0, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4),
                'tower shield specialist' =>    array ( 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
                'tower shield defense' =>       array ( 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
                'immediate repositioning' =>    array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1),
                'tower shield evasion' =>       array ( 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 2),
                'glossary' => array (
                    'burst barrier' => '+1 reflex while using a tower shield vs burst spells and effects',
                    'tower shield training' => '+2 max dex and +3 ACP for the first step, +1 for each step thereafter. No reduced movement for medium armor @step 1, heavy armor @ step 2',
                    'tower shield specialist' => 'no -2 penalty for melee attacks while using a tower shield',
                    'tower shield defense' => 'add shield bonus vs touch attacks',
                    'immediate repositioning' => 'as an immediate action, can reposition a tower shield granting cover, cannot be used to interrupt an attack',
                    'tower shield evasion' => 'evasion @ step 1, improved evasion @ step 2'
                )
            )
        )
    );

    private function buildClasses() {
        $classes = $this->classes;
        foreach($this->archetypes as $archetype) {
            $baseclass = $archetype['baseclass'];
            $newclass = $classes[$baseclass];
            $name = $archetype['name'];

            foreach($archetype['unsets'] as $un) {
                unset($newclass[$un]);
            }

            foreach($archetype['sets'] as $ability => $level_array) {
                if($ability != 'glossary') {
                    $newclass[$ability] = $level_array;
                } else {
                    $newclass[$ability] = array_merge($newclass[$ability], $level_array);
                }
            }

            $classes["$baseclass: $name"] = $newclass;
        }
        return $classes;
    }

    public function getClasses() {
        if(!$this->built) {
            $this->classes = $this->buildClasses();
            $this->build = true;
        }

        return $this->classes;
    }
}

?>
