-- auto-generated definition
create table applevarieties
(
    VarietyName  varchar(100) not null
        primary key,
    Description  text         null,
    Availability tinyint(1)   not null,
    ImageURL     varchar(255) null
);

