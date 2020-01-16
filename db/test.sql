DROP database batch19;
create database batch19;
USE batch19;
Create table members(
	TempNo int(5) not null,
	Name        varchar(10) not null,
	NameWithIn  varchar(15) not null,
	PermanentNo int(10) not null,
	District    varchar(20) not null,
	Village     varchar(20) not null,
	FathersOcc  varchar(20) not null,
	MothersOcc  varchar(20) not null,
	School      varchar(100) not null,
	ALAttempt   int(3) not null,
	About       varchar(200),
	Password    varchar(100) not null,
	CONSTRAINT PRIMARY KEY (TempNo)
);
CREATE TABLE Admin(
	AID  int(10) not null auto_increment primary key,
	TempNo int(5) not null,
	postName varchar(20) not null,
	CONSTRAINT FOREIGN KEY(TempNo) REFERENCES members(TempNo)
	ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Notifications(
	NID int(10) auto_increment,
	AID int(10) not null,
	Topic varchar(50),
	NtfDetail varchar(500),
	date DATE,
	CONSTRAINT PRIMARY KEY (NID),
	CONSTRAINT FOREIGN KEY(AID) REFERENCES Admin(AID)
	ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Sharings(
	SID int(10) auto_increment,
	AID int(10) not null,
	Topic varchar(50),
	link varchar(500),
	CONSTRAINT PRIMARY KEY (SID),
	CONSTRAINT FOREIGN KEY(AID) REFERENCES Admin(AID)
	ON UPDATE CASCADE ON DELETE CASCADE
);





select custname,salary
from Customer
where province IN ('Western','Eastern');

select AID 
from members m,Admin a
where a.TempNo=m.TempNo AND m.TempNo=2;

delete from admin where tempNo=3;


INSERT INTO Notifications(AID,Topic,NtfDetail,date)
          VALUES(1,'Test','','$date');

		  
select distinct District
from members;

select name 
from members
where District='Nuwara Eliya';

select DISTINCT District from members
order by 1 asc;