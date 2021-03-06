<?php


/**
~~~~~~~~~~~~~~~ Planets Database ~~~~~~~~~~~~~~~
    
    Description:
    *This is a database of planets that are in the game. 

    Helpful Information:
    *Each planet and room should have a different ID.
	*ID's should not change.
	*Planet information isn't used anywhere as of now.


~~~~~~~~~~~~~~~ Template ~~~~~~~~~~~~~~~

    *Create a room
    $rooms[] = new Room(ID,"NAME","DESCRIPTION");
    *Example: $rooms[] = new Room(99, "My Room", "My Room Description);

    *Add a thing at a time into the room
    $rooms[ID]->addEntity( MapItem::create(ITEM_ID,AMOUNT,"X,Y","IMAGE") );
    *Add more things at once into the room
    $rooms[ID]->addEntities( array(
                            MapItem::create(ITEM_ID,AMOUNT,"X,Y","IMAGE"), 
                            MapDoor::create(TARGET_ROOM,"X,Y","IMAGE") 
                            ));

    *

 */

$rooms = array();

/**
~~~~~~~~~~~~~~~ Mercury ~~~~~~~~~~~~~~~
*/ 
//Placeholder 
$rooms[] = new Room (0,"You win","You've collected all of the pieces and set out on your journey into the vastness of space.");


$rooms[] = new Room(1,"Outside Power Plant", "You stand outside of what appears to be a large white building behind a closed gate. While its intended use isn't clear, at first glance it appears to be a power plant of some sort.");
//Space Pirate(None, 100) 
//Medicine(1, Cabinet). 
//Puzzle 8 (none, 100)
$rooms[1]->addEntities( array(
    MapItem::create(1,1,"2,4","cabinet"), //Medicine
    MapDoor::create(36, "3,7", "door"), //Mercury's Surface 
    MapMonster::create(0, "10,14", "0", "0", "100"), //Space Pirate
    MapPuzzle::create(68, "11,7", "puzzle") //Puzzle 8

    ));

$rooms[] = new Room(2,"Generator Room", "You head inside and stand in front of what appears to be a power plant. While it's still functional, there is clearly visible damage to the inside of the room, and a few parts appear to be missing.");
//Fire Giant(Engine -1, 100)
//Medicine(2, Storage Container)
 $rooms[2]->addEntities (array( 
     MapItem::create(1,2,"10,5","storage_container"), //Medicine
     MapDoor::create(36, "7,5", "door"), //Mercury's Surface 
     MapMonster::create(5, "3,4", "5", "15", "1") //Fire Giant
  ) ); 
 

$rooms[] = new Room(3,"Destroyed Wing", "The west side of the plant is destroyed beyond repair. The back wall is non-existent; the only evidence that it even existed at any point is a pile of rubble surrounding the spot where the wall should have been.");
 //Elixir(1, Storage Container)
 $rooms[3]->addEntities( array(
      MapItem::create(2,1,"5,6","storage_container"), //Elixir
      MapDoor::create(36, "9,12", "door") //Mercury's Surface 
  ) );
 

$rooms[] = new Room(4,"Manager's Room", "You enter what appears to be an office. A man sits behind a desk and stares at you, wondering what you are doing in here. While he does not seem dangerous, he is wary of your presence.");
 //Defense Drone(Plasma Sword -1, none)
//Gold (100, Cabinet)
 $rooms[4]->addEntities( array(
     MapItem::create(0,100, "14,4", "cabinet"), //Gold
     MapDoor::create(36, "5,7", "door"), //Mercury's Surface 
     MapMonster::create(2, "3,7", "2", "6", "1") //Defense Drone
    )); 




/**
~~~~~~~~~~~~~~~ Venus ~~~~~~~~~~~~~~~
*/
$rooms[] = new Room(5, "Lake", "The city is flanked by a lake on the left side with a yacht floating nearby, probably used to get to the white house across the lake for surprises. On the right side, there is a rock covered tomb. Be adventurous to find hidden stuff!!");
//Laser rifle(1, Hole), Medicine(1, Bag)
//Puzzle 7(none, 300)
$rooms[5]->addEntities( array(
    MapItem::create(1,1,"2,3","bag"), //Medicine
    MapItem::create(8,1, "5,7", "hole"), //Laser rifle
    MapDoor::create(37, "3, 4", "venus"), //Venus Surface
    MapPuzzle::create(67, "10,11", "puzzle") //Puzzle 7
));


$rooms[] = new Room(6, "Ghost Town", "This is the best part of the city! Due to the amount of UV rays coming from the Sun, there are sand dunes, and a lively city, filled with pools and a church. WATCH OUT!! There might be something here that could harm you."); 
// Ruffian(None, 100)
//Gold (100, Cabinet), Medicine(1, Storage Container)
$rooms[6]->addEntities( array(
    MapItem::create(1, 1, "10,13", "storage_container"), //Medicine
    MapItem::create(0, 100, "8,3", "cabinet"), //Gold
    MapDoor::create(37, "4,3", "venus"), //Venus Surface
    MapMonster::create(7, "5,6", "7", "0", "100") //Ruffian
)); 


$rooms[] = new Room(7, "Volcano", "This the smallest city on Venus, also called the City of Natural Disasters. Mainly volcanoes and hurricanes. As you move around, you see a wooden door blocking the way .");
//Elixir(1, Hole) 
//Gold (100, Bag)
//Puzzle 6 (Defense turret -1, 0)
//Lava Spider(none, 100)
$rooms[7]->addEntities( array(
    MapItem::create(2,1,"12,5","hole"), //Elixir   
    MapItem::create(0,100, "8,3", "cabinet"), //Gold
    MapDoor::create(37, "9,8", "venus"), //Venus Surface
    MapPuzzle::create(66, "7,5", "puzzle"), //Puzzle 6 
    MapMonster::create(8, "2,7", "8", "0", "150") //Lava Spider 
));


$rooms[] = new Room(8, "Field", "ALERT!! There is a gigantic, terrifying, carnivorous creature on a hunger strike. This is the last stage of Venus. Good Luck!");
//Ruffian(none, 100)
//Medicine(1, Hole) 
$rooms[8]-> addEntities(array(
    MapItem::create(1,1, "2,7", "hole"), //Medicine
    MapDoor::create(37, "8,7", "venus"), //Venus Surface
    MapMonster::create(7, "3,10", "7", "0", "100") //Ruffian
)); 




/**
~~~~~~~~~~~~~~~ Earth ~~~~~~~~~~~~~~~
*/

$rooms[] = new Room(9, "Crash Site", "You wake up in a forest, dazed but uninjured. You stand up and look at your ship, which is missing many vital pieces from your encounter with a band of space pirates. There is no way that the ship can fly in its current condition, so you must find another way to get off this planet. To the North, there appears to be a building, so maybe it would be best to investigate.");
//Worn Out robot ( Elixir -1, none) 
//Gold (100, Storage Container)
$rooms[9]->addEntities( array(
    MapItem::create(1,2,"2,3","rock"), //Medicine
    MapItem::create(0,100,"4,2","rock"), //Gold
    MapItem::create(3,1,"10,11","rock"), //Mineral
    MapDoor::create(10,"8,6","lab"),  //Lab entrance
    MapMonster::create(6, "9,8", "6", "2", "1") //Worn Out Robot
)
);


$rooms[] = new Room(10, "Lab Entrance", "The remains of the destroyed robot lay on the floor. The fight with the robot destroyed all machinery in the room, meaning that getting information from the room is no longer an option. Behind you is the exit of the lab, and ahead, there is a door to another room.");
//Gold(100, Storage Container) 
//Puzzle 5(Plasma Knife -1, none)
$rooms[10]->addEntities( array(
    MapItem::create(1,2,"2,13","rock"), //Medicine
    MapItem::create(0,10,"8,5","rock"), //Gold
    MapDoor::create(9,"5,5","door"), //Crash Site
    MapDoor::create(11,"13,1","door"), //Portal Room
    MapPuzzle::create(65, "3,10", "puzzle") //Puzzle 5
)
);



$rooms[] = new Room(11, "Portal room", "You enter a room with a single portal, which is currently turned on and active.");
//Worn-out robot(Plasma Knife - 1, 100) 
//Medicine(1, Barrel)
$rooms[11]->addEntities( array(
    MapItem::create(1, 1, "5,7", "barrel"), //Medicine
    MapDoor::create(10,"13,1","door"),  //Lab entrance
    MapDoor::create(12,"2,5","portal"), //Home Base
    MapMonster::create(6, "9,5", "6", "5", "1") //Worn Out Robot
)
);


$rooms[] = new Room(12, "Home Base",  "Upon exiting the portal, you enter a base located on the Moon. The room is filled with four portals labeled Mercury, Venus, Earth, and Mars. There is also a shop keeper here who watches you, hoping that you came to buy something.");
//Nothing here except Shop portal
$rooms[12]->addEntities( array(
    MapDoor::create(11,"2,5","portal"), //Portal Room
    MapDoor::create(50, "2,8", "shop"), //Shop portal 
    MapDoor::create(17, "5,2", "portal"), //Europa
    MapDoor::create(22, "4,9", "portal"), //Titan
    MapDoor::create(36, "2,9", "portal"), //Mercury
    MapDoor::create(37, "10,14", "portal"), //Venus
    MapDoor::create(38, "11,11", "portal"), //Mars
    MapDoor::create(31, "6,5", "portal"), //Triton
    MapDoor::create(27, "9,10", "portal") //Umbriel
)
);


/**
~~~~~~~~~~~~~~~ Mars ~~~~~~~~~~~~~~~
*/

$rooms[] = new Room(13, "Trap Room", "When you enter the room, you see a bunch of trap holes scattered across the floor. The room is filled with furniture. It would be a good idea to search around for rewards.");
//Defense Drone(none, none)
//Gold(100, Cabinet)
//Plasma Sword (1, Barrel), Medicine (1, Bag)
//Puzzle 4(none, 100)
$rooms[13]->addEntities( array(
    MapItem::create(0, 100, "9,12", "cabinet"), //Gold
    MapItem::create(6, 1, "3,6", "barrel"), //Plasma sword
    MapItem::create(1, 1, "7,3", "bag"), //Medicine
    MapDoor::create(38, "5,6", "door"), //Mars Surface
    MapMonster::create(2, "6,10", "2", "4", "1"), //Defense Drone
    MapPuzzle::create(64, "10,12", "puzzle") //Puzzle 4 
)
);


$rooms[] = new Room(14, "Wasteland", "You walk into most disastrous room on the planet. There is medication in the room and few other rewards.");
//Gold (100, Cabinet) Medicine (1, Bag)
$rooms[14]->addEntities( array(
    MapItem::create(0, 100, "5,2", "cabinet"), //Gold
    MapItem::create(1, 1, "5,7", "bag"), //Medicine
    MapDoor::create(38, "6,8", "mars") //Mars Surface
)
);


$rooms[] = new Room(15, "Phobos", "You walk into a room torn apart by destruction. You wonder what could have caused it, until you see the monster waiting for you in the corner. There seems to be medication and other rewards for you, just beyond the monster. Better kill it first.");
//Fire Giant (none, 200)
//Medicine(1, Barrel), Laser Rifle (1, Hole) 
//Puzzle 3(none, 200)
$rooms[15]->addEntities( array(
    MapItem::create(1, 1, "5,7", "barrel"), //Medicine
    MapItem::create(8, 1, "9,8", "hole"), //Laser rifle
    MapDoor::create(38, "12,5", "portal"), //Mars Surface
    MapMonster::create(5, "3,5", "5", "0", "200"), //Fire Giant
    MapPuzzle::create(63, "4,8", "puzzle") //Puzzle 3 
)
);


$rooms[] = new Room(16, "Deimos", "The human population on Earth was growing and the lack of space pushed humans to colonize here. This moon must be filled with plenty of hidden medication under the sand dunes.");
//Defense Drone(none, 100)
//Medicine(1, Barrel)
$rooms[16]->addEntities( array(
    MapItem::create(1, 1, "3,9", "barrel"), //Medicine
    MapDoor::create(38, "12,13", "portal"), //Mars Surface
    MapMonster::create(2, "9,8", "2", "0", "100") //Defense Drone 
)
);




/**
~~~~~~~~~~~~~~~ Jupiter ~~~~~~~~~~~~~~~
*/

$rooms[] = new Room(17, "Europa", "This is one of Jupiter's biggest moons, and has subsurface oceans. Human colonists set up civilizations in these subsurface oceans that also contain life native to the moon.");
// Kraken(Wings - 1, 0)
$rooms[17]->addEntities( array(
    MapDoor::create(12, "5,2", "portal"), //Home Base
    MapDoor::create(19, "4,3", "portal"), //Io 
    MapDoor::create(18, "3,4", "portal"), //Ganymede
    MapMonster::create(4, "10,11", "4", "17", "1") //Kraken 
)); 


$rooms[] = new Room(18, "Ganymede", "Ganymede is the biggest moon in the solar system which attracted many humans to come and colonize it. It rapidly became the most densely populated place in the solar system.");
//Gold(200, Bag)
$rooms[18]->addEntities( array(
    MapItem::create(0, 200, "5,7", "bag"), //Gold
    MapDoor::create(17, "3,4", "portal"), //Europa
    MapDoor::create(19, "10,9", "portal"), //Io
    MapDoor::create(21, "6,7", "portal") //Amalthea
)
);


$rooms[] = new Room(19,"Io", "This moon has over 400 active volcanoes. Scientists attempted to set up geothermal power plants on the moon but the volcanoes were less dormant than the scientist expected, and all that's left now are the remants of half-built power plants.");
//Fire Giant (none, 200)
$rooms[19]->addEntities( array(
   MapDoor::create(17, "4,3", "portal"), //Europa
   MapDoor::create(18, "10,9", "portal"), //Ganymede
   MapDoor::create(21, "2,6", "portal"), //Amalthea
   MapMonster::create(5, "9,5", "5", "0", "100") //Fire Giant 
)); 

//!!!! Deleted room. Ignore 
$rooms[] = new Room(20,"Calisto", "Calisto is one of the oldest moons in the solar system. Its surface is filled with ice and craters making it a very hostile environment to live in.");



$rooms[] = new Room(21, "Amalthea", "This moon has an amazing view of Jupiter. Because of the stunning view, a religious cult was set up on the moon to worship Jupiter's big red spot.");
//Minerals(1, Barrel)
//Puzzle 0 (none, laser rifle -1)
$rooms[21]->addEntities( array(
    MapItem::create(1, 1, "5,7", "barrel"), //Medicine
    MapDoor::create(19, "2,6", "portal"), //Io
    MapDoor::create(18, "6,7", "portal"), //Ganymede
    MapPuzzle::create(60, "9,4", "puzzle") //Puzzle 0 
)
);



/**
~~~~~~~~~~~~~~~ Saturn ~~~~~~~~~~~~~~~
*/

$rooms[] = new Room(22, "Titan", "This large barren moon is a orange color because of its atmosphere. The surface of Titan is flat, as it lacks huge craters and towering mountains. Tall dunes stretch across the surface, far and wide. Abandoned settlements are scattered in the distance.");
//Space Pirate(none, 100)
//Medicine (1, Barrel), Elixir (1, Bag), Gold (100, Hole) 
$rooms[22]->addEntities( array(
    MapItem::create(1, 1, "10,12", "barrel"), //Medicine
    MapItem::create(2, 1, "3,7", "bag"), //Elixir
    MapItem::create(0, 100, "7,9", "hole"), //Gold
    MapDoor::create(12, "4,9", "portal"), //HOME BASE
    MapDoor::create(23, "9,7", "portal"), //Enceladus
    MapDoor::create(24, "7,3", "portal"), //Mimas
    MapDoor::create(25, "4, 5", "portal"), //Pandora
    MapDoor::create(26, "9,10", "portal"), //Atlas
    MapMonster::create(0, "2,5", "0", "0", "100") //Space Pirate
)
);


$rooms[] = new Room(23, "Enceladus", "Enceladus is a light blue-ish white color due to the surface being made up entirely of ice. Massive geysers frequently spew water from the moon's subsurface oceans into space. Abandoned mining operations surround the geysers to collect materials around the area.");
// Space Pirate (none, 100)
//Minerals (1,hole), Gold (100,cabinet)
$rooms[23]->addEntities( array(
    MapItem::create(1, 1, "5,6", "hole"), //Medicine
    MapItem::create(0, 100, "6,2", "cabinet"), //Gold
    MapDoor::create(22, "9,7", "portal"), //Titan
    MapDoor::create(26, "4,3", "portal"), //Atlas
    MapDoor::create(25, "13, 12", "portal"), //Pandora
    MapMonster::create(0, "10,3", "0", "0", "100") //Space Pirate
)
);


$rooms[] = new Room(24, "Mimas", "Mimas is a small moon that was considered too insubstantial to establish a human colony. As a result, pirates who raided trade shipments established a base here, although it has now long been abandoned.");
//Space Pirate Captain(Communication Network -1, none) 
$rooms[24]->addEntities( array(
    MapDoor::create(25, "7,8", "portal"), //Pandora
    MapDoor::create(22, "7,3", "portal"), //Titan
    MapDoor::create(26, "11,11","portal"), //Atlas
    MapMonster::create(1, "5,3", "1", "16", "1") //Space Pirate Captain 
)); 


$rooms[] = new Room(25, "Pandora", "Pandora is an extremely small, heavily cratered, moon. It was used as a staging facility to ease travel between human colonies. The remains of a star-port are still there.");
//Space Pirate (Plasma Pistol -1, none)
//Medicine (1, Storage Container), Gold (500, Hole)
$rooms[25]->addEntities( array(
    MapItem::create(1, 1, "5,7", "storage_container"), //Medicine
    MapItem::create(0, 500, "8,5", "hole"), //Gold
    MapDoor::create(23, "13,12", "portal"), //Enceladus
    MapDoor::create(22, "4,5", "portal"), //Titan
    MapDoor::create(24, "7,8", "portal"), //Mimas
    MapMonster::create(0, "3,5", "0", "7", "1") //Space Pirate
)
);



$rooms[] = new Room(26, "Atlas", "Atlas is an extremely small, disk-shaped moon that orbits closely around Saturn's rings. Surrounding nations agreed to make this moon neutral to all governments, and the moon became a hotbed for tourism to view Saturn’s incredible rings. Abandoned hotels and attractions sprawl across the surface of Atlas.");
// Gold (200,Cabinet) 
$rooms[26]->addEntities( array(
    MapItem::create(0, 200, "5,7", "cabinet"), //Gold
    MapDoor::create(22, "9,10", "portal"), //Titan
    MapDoor::create(24, "11,11", "portal"), //Mimas
    MapDoor::create(23, "4,3", "portal") //Enceladus
)
);



/**
~~~~~~~~~~~~~~~ Uranus ~~~~~~~~~~~~~~~
*/


$rooms[] = new Room(27, "Umbriel", "Of all the moons of Uranus, Umbriel is the darkest, and very little sunlight reaches the surface. Unwilling to found a colony on this moon, the humans created a large prison complex here.");
//Defense Drone (none, 100) 
//Gold (100, Barrel), Elixir (1, Bag)
$rooms[27]->addEntities( array(
    MapItem::create(0, 100, "8,2", "barrel"), //Gold
    MapItem::create(2, 1, "2,9", "bag"), //Elixir
    MapDoor::create(12, "9,10", "portal"), //Home Base
    MapDoor::create(28, "3,9", "portal"), //Titania
    MapDoor::create(29, "5,6", "portal"), //Ariel
    MapDoor::create(30, "10,11", "portal"), //Oberon
    MapMonster::create(2, "4,8", "2", "0", "100") //Defense Drone
)
);


$rooms[] = new Room(28, "Titania", "Known for its high winds, numerous craters, and canyons, humans established underground colonies here to hunt for resources.");
//Defense Drone(none, 100)
//Minerals (1, Hole)
$rooms[28]->addEntities( array(
   MapItem::create(3, 1, "5,7", "hole"), //Mineral
   MapDoor::create(27, "3,9", "portal"), //Umbriel
   MapDoor::create(29, "10,3", "portal"), //Ariel
   MapMonster::create(2, "6,3", "2", "0", "100") //Defense Drone 
)
);


$rooms[] = new Room(29, "Ariel", "Ariel has vast, wide-open plains that humans once used for farming. After this moon's abandonment, agricultural villages remain scattered throughout the colony. They may prove useful.");
//Ruffian(Elixir -1, none)
//Medicine (1, Bag) 
//Puzzle 1(none, 100)
$rooms[29]->addEntities( array(
    MapItem::create(1, 1, "5,10", "bag"), //Medicine
    MapDoor::create(27, "5,6", "portal"), //Umbriel
    MapDoor::create(28, "10,3", "portal"), //Titania
    MapDoor::create(30, "3,8", "portal"), //Oberon
    MapMonster::create(7, "9,3", "7", "2", "1"), //Ruffian
    MapPuzzle::create(61, "2,8", "puzzle") //Puzzle 1 
)
);


$rooms[] = new Room(30, "Oberon", "This large, heavily cratered moon has been set up as a research station by humans. Now abandoned, the research station holds many secrets...");
//Mad Scientist(Radar -1, none)
//Elixir(1, Cabinet)
//Minerals(1, Hole) 
$rooms[30]->addEntities( array(
    MapItem::create(2, 1, "4, 8", "cabinet"), //Elixir
    MapItem::create(3, 1, "5,2", "hole"), //Minerals
    MapDoor::create(27, "10,11", "portal"), //Umbriel
    MapDoor::create(29, "3,8," ,"portal"), //Ariel
    MapMonster::create(3, "8,10", "3", "13", "1") //Mad Scientist
)
);




/**
~~~~~~~~~~~~~~~ Neptune ~~~~~~~~~~~~~~~
*/
$rooms[] = new Room(31,"Triton", "Triton is an extremely large moon. Its surface is completely covered by a mostly frozen nitrogen water-ice crust. Since the moon is cold and barren, humans avoided colonizing it.");
//Fire Giant(Cockpit -1, 100)
//Puzzle 9(none,100) 
$rooms[31]->addEntities( array(
    MapDoor::create(12, "6,5", "portal"), //Home Base
    MapDoor::create(32, "10,11", "portal"), //Nereid
    MapMonster::create(5, "2,3,", "5", "14", "1"), //Fire Giant 
    MapPuzzle::create(69, "3,9", "puzzle") //Puzzle 9 
)
);

$rooms[] = new Room(32, "Nereid", "This is the third largest moon of Neptune and contained valuable resources sought after by humans. They eventually mined the moon hollow and left only equipment behind.");
//Minerals (1, Hole)  
$rooms[32]->addEntities( array(
    MapItem::create(3, 1, "7,5", "hole"), //Minerals
    MapDoor::create(31, "10,11", "portal"), //Triton
    MapDoor::create(33, "4,8", "portal"), //Neso
    MapDoor::create(34, "3,9", "portal") //Naiad
)
);


$rooms[] = new Room(33, "Neso", "Neso is a small non-spherical moon that is 48-million kilometers from Neptune. This moon was used as a religious cult who believed Neptunes big blue spot contained secrets to immortality. Must've been the same cult that moved on to Jupiter...");
//Ruffian(none, 100)
//Medicine (1, Bag)
$rooms[33]->addEntities( array(
    MapItem::create(1, 1, "8,4", "bag"), //Medicine
    MapDoor::create(32, "4,8", "portal"), //Nereid
    MapMonster::create(7, "2,10", "7", "0", "100") //Ruffian 
)
);


$rooms[] = new Room(34, "Naiad", "This moon is the closest satellite to Neptune, and was once a thriving trading colony that humans lived on. At least until the tidal stretching that forced humans to leave before the moon ripped itself apart.");
//Minerals (2, Bag)
//Puzzle 2(Elixir-1, none)
$rooms[34]->addEntities( array(
    MapItem::create(3, 2, "8,9", "bag"), //Minerals
    MapDoor::create(32, "3,9", "portal"), //Nereid
    MapDoor::create(35, "10,13", "portal"), //Thalassa
    MapPuzzle::create(62, "6,5", "puzzle") //Puzzle 2 
)
);



$rooms[] = new Room(35, "Thalassa", "Thalassa is a small bare moon. Its only purpose for human colonists was to use it for sightseeing. Some people may have left some valuable things behind.");
//Space Pirate(none, 200)
//Gold(300, Storage Container)
$rooms[35]->addEntities( array(
    MapItem::create(0, 300, "5,7", "storage_container"), //Gold
    MapDoor::create(34, "10,13", "portal"), //Naiad
    MapMonster::create(0, "3,9", "0", "0", "200") //Space Pirate
)
);



/** Extra rooms we needed in order to match the map (mainly planet surfaces)
~~~~~~~~~~~~~~~ Extra Rooms  ~~~~~~~~~~~~~~~
*/

$rooms[] = new Room(36, "Mercury's Surface", "You arrive on Mercury and look around. There are buildings nearby. It would be a good idea to check them out.");
$rooms[36]->addEntities(array (
    MapDoor::create(1, "3,7", "powerplant"), //Outside Powerplant
    MapDoor::create(2, "7,5", "garage"), //Generator Room 
    MapDoor::create(3, "9,12", "building"), //Destroyed Wing 
    MapDoor::create(4, "5,7", "building"), //Manager's Room 
    MapDoor::create(12, "2,9", "portal") //Mercury
   
));


$rooms[] = new Room(37, "Venus' Surface", "You arrive on Venus and see buildings nearby. You better check them out.");
$rooms[37]->addEntities(array(
    MapDoor::create(5, "3, 4", "room"), //Lake
    MapDoor::create(6, "4,3", "room"), //Ghost Town
    MapDoor::create(7, "9,8", "volcano"), //Volcano
    MapDoor::create(8, "8,7", "room"), //Field
    MapDoor::create(12, "10,14", "portal") //Venus
)); 

$rooms[] = new Room(38, "Mars' Surface", "You arrive on Mars and scan the area. There are buildings and portals scattered around. It would be a good idea to check them out.");
$rooms[38]->addEntities( array (
    MapDoor::create(13, "5,6", "building"), //Trap Room
    MapDoor::create(14, "6,8", "room"), //Wastland
    MapDoor::create(15, "12,5", "portal"), //Phobos
    MapDoor::create(16, "10,13", "portal"), //Deimos
    MapDoor::create(12, "11,11", "portal"), //Mars
    
));




/**
~~~~~~~~~~~~~~~ SHOP ~~~~~~~~~~~~~~~
*/

$rooms[] = new Shop(50, "Shop", "This is the home world shop.");


/**
~~~~~~~~~~~~~~~ PUZZLES ~~~~~~~~~~~~~~~
*/

$rooms[] = new Puzzle(60, "What are Saturn’s rings made of?", "Ice", "Dust, Ice, or Boron", 7, 1);
$rooms[] = new Puzzle(61, "True or False: Saturn is less dense than water.", "True", "Saturn can float on water", 0, 150);
$rooms[] = new Puzzle(62, "Saturn was Discovered by ______.", "Galileo", "Isaac Newton, Copernicus, or Galileo", 2, 2);
$rooms[] = new Puzzle(63, "What kind of natural disaster happens on the moon?", "Moonquake", "Not an earthquake", 0, 200);
$rooms[] = new Puzzle(64, "Sometimes I’m full, but I never overflow. What am I?", "The moon", "Not the sun", 0, 150);
$rooms[] = new Puzzle(65, "It dances bright, banishing all but darkest night. Give it food and it will live; Give it water and it will die. What is it?", "Fire", "Everything changed when the __ nation attacked", 5, 1);
$rooms[] = new Puzzle(66, "Sometimes you can see my tail. I’m not a planet. I am _____.", "Comet", "I visit earth every 76 years", 18, 1);
$rooms[] = new Puzzle(67, "How many years does it take for a solar eclipse to occur?", "1.5", "Eighteen months", 0, 300);
$rooms[] = new Puzzle(68, "How many days does it take Mercenary to orbit the sun?", "88", "I ate and ate", 0, 200);
$rooms[] = new Puzzle(69, "True or False: The Grand Canyon is the biggest canyon in the solar system.", "False", "There is a grander canyon", 0, 150);

/**
~~~~~~~~~~~~~~~ MONSTERS ~~~~~~~~~~~~~~~
*/

$monsterList = array();
$monsterList[] = new Monster(0, "Space Pirate", "Infamous space pirates known for causing havoc system wide. They are despised by all colonies. They are armored with light weaponry and armor.", 6, 15);
$monsterList[] = new Monster(1, "Space-Pirate Captain" ,"Commander of all space pirates in the solar System. He is heavily armored and has powerful weaponry.", 10, 55);
$monsterList[] = new Monster(2, "Defense Drone", "These defense drones were created to defend research stations from space pirates, however an evil scientist has hacked them and turned them against the player! They attack with a deadly laser but are somewhat weak.", 7, 15);
$monsterList[] = new Monster(3, "Mad Scientist" , "This evil scientist has been hired by the pace pirates to steal technology from research stations. He has hacked defense drones to do his bidding", 8, 45);
$monsterList[] = new Monster(4, "Kraken", "Huge green sea creature that resides in an ocean moon of Neptune. Frequently terrorizes colonists with its spiky tentacles", 12, 120);
$monsterList[] = new Monster(5, "Fire Giants" ,"Fire resistant monsters native to volcanic moons.", 9, 55);
$monsterList[] = new Monster(6, "Worn-out Robot", "Old robot that you find on the surface of earth. It’s not very strong.", 5, 10);
$monsterList[] = new Monster(7, "Ruffians" ,"Thieves that disrupt and steal from colonists", 4, 12);
$monsterList[] = new Monster(8, "Lava Spider" ,"Fire resistant monsters native to volcanic moons.", 3, 55);
//$monsterList[] = new Monster(id, name ,description, strength, healthpoints);


$rooms[] = new Battle($monsterList);


$default_room = $rooms[9];

?>
