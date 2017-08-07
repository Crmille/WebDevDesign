var label 	= document.getElementbyId('item');
var desc 	= document.getElementbyId('desc');
var sel 	= document.getElementbyId('irarity');

var loc 	= document.getElementbyId('location');




// Item Object Class
class Item {
	constructor(name, rarity, description, source) {
		this.name = name;
		this.rarity = rarity;
		this.description = description;
		this.source = source;
	}

	getItemSize(){ // Determines the probability of a item's size.
		sizeVal = rand100();
		if ( sizeVal < 31) {
			return 'Small';
		} else if (sizeVal > 89) {
			return 'Large';
		} else {
			return 'Medium';
		}
	}
}
class Weapon 	extends Item{
	constructor(name, rarity, description, source) {
		this.name = name;
		this.rarity = rarity;
		this.description = description;
		this.source = source;
		this.size = super.getItemSize();
	}
}
class Potion 	extends Item{
	constructor() {
	}
}
class Armor 	extends Item{
	constructor(name, rarity, description, slot, source) {
		this.name = name;
		this.rarity = rarity;
		this.description = description;
		this.source = source;
		this.size = super.getItemSize();
		this.slot = slot;
	}
}
class Wondrous 	extends Item{
	constructor(name, rarity, description, slot, source) {
		this.name = name;
		this.rarity = rarity;
		this.description = description;
		this.source = source;
		this.size = super.getItemSize();
		this.slot = slot;
	}
}

// Database Arrays
var itemTable = [];
var itemWeapons = [];
var itemArmor = [];
var itemPotion = [];
var 


function rand100(){
	return Math.floor(Math.random()*(100)) +1;
}

function randInt(min, max){
	min = Math.ceil(min);
	max = Math.max(max);
	return Math.floor(Math.random()*(max - min +1)) + min;
}

generateItemsFromLocation(){
	// Determine type of Item
	// Determine Location
	// Determine Quality
	// For each Source, add quality type to masters
	// Randomly pick items by Location
	// Return Assortment





}