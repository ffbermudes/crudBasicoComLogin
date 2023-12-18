use sistema_de_login;

CREATE TABLE user (
    id_user int auto_increment,
    user varchar(55) unique,
    pass_sha varchar(255),
    primary key (id_user)
);

select * from user;