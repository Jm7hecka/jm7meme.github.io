create database jm7website;
CREATE TABLE `jm7website`.`itemlist` (
  `id` INT NOT NULL,
  `itemname` VARCHAR(45) NOT NULL,
  `itemimg` VARCHAR(45) NOT NULL,
  `itemprice` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`, `itemname`, `itemimg`, `itemprice`));
  
insert into itemlist(id, itemname, itemimg, itemprice)
values(1, "版主露臉照 jm7's photo", "item1.png", "$100");
insert into itemlist(id, itemname, itemimg, itemprice)
values(2, "版主露臉照（持續更新）jm7's photo(continually updated)", "item2.png", "$1000");
SELECT * from itemlist;