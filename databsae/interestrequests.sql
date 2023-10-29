-- auto-generated definition
create table interestrequests
(
    RequestID   int auto_increment
        primary key,
    Username    varchar(50)  not null,
    VarietyName varchar(100) not null,
    Timestamp   datetime     not null,
    constraint interestrequests_ibfk_1
        foreign key (Username) references users (Username),
    constraint interestrequests_ibfk_2
        foreign key (VarietyName) references applevarieties (VarietyName)
);

create index Username
    on interestrequests (Username);

create index VarietyName
    on interestrequests (VarietyName);

