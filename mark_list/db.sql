create table test.mark_list(
    reg_no varchar(20) not null,
    name varchar(20) not null,
    sem varchar(10) not null,
    mark int(8) not null,
    grade char(1) not null
);

insert into test.mark_list
values("WMOCBCA040","MIDLAJ C","SEM 1","256","A"),
("WMOCBCA040","MIDLAJ C","SEM 2","128","B");
