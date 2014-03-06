drop database nitk;
create database nitk;
use nitk;

create table login(
	username varchar(256) primary key
);

create table organizer(
oid int primary key,
username varchar(256),
password varchar(256),
name varchar(256),
emailid varchar(256),
contact_no int,
foreign key(username) references login(username));

create table participant(
	pid int primary key,
	name varchar(256),
	contact_no varchar(256)

);

create table event(
eid int primary key,
name varchar(256),
edate date,
etime varchar(256),
poster varchar(256),
video varchar(256),
description varchar(256),
oid int,
category varchar(256),
venue varchar(256),
foreign key(oid) references organizer(oid) 
 );

create table registers_for(
pid int,
eid int,
primary key(pid,eid),
foreign key(pid) references participant(pid),
foreign key(eid) references event(eid));

insert into login values('mhkgarg');
insert into login values('anuj2004');
insert into login values('shubhshubh');

insert into organizer(oid,username,password) values(1,'mhkgarg','test1');
insert into organizer(oid,username,password) values(2,'anuj2004','test2');
insert into organizer(oid,username,password) values(3,'shubhshubh','test3');

insert into participant values(1,'mahak',1);
insert into participant values(2,'anuj',2);
insert into participant values(3,'shubhangi',3);

insert into event(eid,name,oid) values(1,'spandan',1);
insert into event(eid,name,oid) values(2,'djnights',2);
insert into event(eid,name,oid) values(3,'studdy buddy',3);

insert into registers_for values(1,1);
insert into registers_for values(2,2);
insert into registers_for values(3,3);	