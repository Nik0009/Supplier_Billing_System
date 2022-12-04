
  #Orders Table
  CREATE TABLE IF NOT EXISTS `orders` (
  `rno` int(15) NOT NULL auto_increment,
  `cname` varchar(255) NOT NULL,
  `add` varchar(300) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `ddate` timestamp NOT NULL ,
  `contact` varchar(100) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
   PRIMARY KEY  (`rno`));



  #Orders Table
  CREATE TABLE IF NOT EXISTS `orders` (
  `rno` int(15) NOT NULL auto_increment,
  `cname` varchar(255) ,
  `add` varchar(300) ,
  `ptype` varchar(50),
  `ddate` timestamp  ,
  `contact` varchar(100),
  `product_code` varchar(255),
  `product_name` varchar(255),
  `product_desc` varchar(255),
  `price` int(10),
  `units` int(5) ,
  `total` int(15),
  `date` timestamp  default CURRENT_TIMESTAMP,
   PRIMARY KEY  (`rno`));


  CREATE TABLE `customers` (

 `sr_no` int(15) NOT NULL auto_increment,
 `cname` varchar(255),
 `add` text,
 `ptype` varchar(100),
 PRIMARY KEY (`sr_no`)
                         );


  "INSERT INTO customers (cname,add,ptype) VALUES ('$cname', '$add', '$ptype')"

#To delete column from Table

  ALTER TABLE orders
DROP COLUMN cname;