-- auto-generated definition
create table saleshistory
(
    SaleID      int auto_increment
        primary key,
    Username    varchar(50)    not null,
    VarietyName varchar(100)   not null,
    Quantity    decimal(10, 2) not null,
    AmountPaid  decimal(10, 2) not null,
    Timestamp   datetime       not null,
    constraint saleshistory_ibfk_1
        foreign key (Username) references users (Username),
    constraint saleshistory_ibfk_2
        foreign key (VarietyName) references applevarieties (VarietyName)
);

create index Username
    on saleshistory (Username);

create index VarietyName
    on saleshistory (VarietyName);

