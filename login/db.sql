create test.users(
    id int(8) primary key,
    username varchar(20) not null unique,
    name varchar(20) not null,
    password varchar(20) not null
)

insert into test.users
values("1","midlajc","MIDLAJ C","password");