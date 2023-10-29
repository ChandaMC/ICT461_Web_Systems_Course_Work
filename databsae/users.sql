-- auto-generated definition
create table users
(
    Username          varchar(50)                            not null   primary key,
    Password          varchar(255)                           not null,
    Email             varchar(100)                           not null,
    FullName          varchar(50)                            not null,
    ContactNumber     varchar(15)                            null,
    VerificationToken varchar(100)                           null,
    IsVerified        tinyint(1) default 0                   null,
    CreatedAt         timestamp  default current_timestamp() not null,
    role              int        default 2                   null,
    constraint Email
        unique (Email)
);

create index CreatedAtIndex
    on users (CreatedAt);

