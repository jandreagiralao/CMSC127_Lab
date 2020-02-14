CREATE DATABASE applicants;

CREATE TABLE info(
	sName varchar(30) not null,
	fName varchar(30) not null,
	fNameExt varchar(5),
	mName varchar(30) not null,
	
	birthday varchar(30) not null,
	birthplace varchar(30) not null,
	sex varchar(10) not null,
	cStatus varchar(15) not null,

	height varchar(15) not null,
	weight varchar(15) not null,

	bType varchar(15),
	gsis varchar(15),
	pagibig varchar(15),
	philhealth varchar(15),
	sss varchar(15),
	tin varchar(15),
	agency varchar(15),
	
	citizenship varchar(15) not null, 
	citType varchar(15) not null,

	house varchar(15) not null,
	street varchar(15) not null,
	subdivision varchar(15) not null,
	barangay varchar(30) not null,
	city varchar(30) not null,
	province varchar(30) not null,

	zip varchar(4) not null,

	phouse varchar(15) not null,
	pstreet varchar(15) not null,
	psubdivision varchar(15) not null,
	pbarangay varchar(30) not null,
	pcity varchar(30) not null,
	pprovince varchar(30) not null,

	pzip varchar(4) not null,
	
	telephone varchar(7) not null,
	mobile varchar(11) not null,
	email varchar(30) not null,

	ssName varchar(30),
	sfName varchar(30),
	sfNameExt varchar(5),
	smName varchar(30),
	
	occupation varchar(15),
	employer varchar(15),
	busAdd varchar(15),
	sTel varchar(15),

	fsName varchar(30),
	ffName varchar(30),
	ffNameExt varchar(5),
	fmName varchar(30),

	msName varchar(30),
	mfName varchar(30),
	mmName varchar(30),

	child1 varchar(30), 
	child2 varchar(30),
	child3 varchar(30),
	child4 varchar(30),
	child5 varchar(30), 
	child6 varchar(30),
	child7 varchar(30),
	child8 varchar(30),
	child9 varchar(30), 
	child10 varchar(30),
	child11 varchar(30),
	child12 varchar(30),

	birth1 varchar(30),
	birth2 varchar(30),
	birth3 varchar(30),
	birth4 varchar(30),
	birth5 varchar(30),
	birth6 varchar(30),
	birth7 varchar(30),
	birth8 varchar(30),
	birth9 varchar(30),
	birth10 varchar(30),
	birth11 varchar(30),	
	birth12 varchar(30),

	elem varchar(30),
	sec varchar(30),
	voc varchar(30),
	col varchar(30),
	grad varchar(30),

	elemC varchar(30),
	secC varchar(30),
	vocC varchar(30),
	colC varchar(30),
	gradC varchar(30),

	elemAF varchar(30),
	secAF varchar(30),
	vocAF varchar(30),
	colAF varchar(30),
	gradAF varchar(30),

	elemAT varchar(30),
	secAT varchar(30),
	vocAT varchar(30),
	colAT varchar(30),
	gradAT varchar(30),

	elemHL varchar(30),
	secHL varchar(30),
	vocHL varchar(30),
	colHL varchar(30),
	gradHL varchar(30),

	elemYG varchar(30),
	secYG varchar(30),
	vocYG varchar(30),
	colYG varchar(30),
	gradYG varchar(30),

	elemAH varchar(30),
	secAH varchar(30),
	vocAH varchar(30),
	colAH varchar(30),
	gradAH varchar(30),

	signature varchar(30),
	dateToday varchar(30)

);

CREATE TABLE education(
	edID varchar(5),
	lvl varchar(30)
);

CREATE TABLE scholarship(
	sID varchar(5),
	scholarship varchar(30)
);

CREATE TABLE majorfield(
	majorID varchar(5),
	majorField varchar(30)
);

