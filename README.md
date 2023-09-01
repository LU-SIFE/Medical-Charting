# Medical_Charting

Charting software and documentation for Catalyst medical classes

## Contributors:

### Year 1:

> [Aaron Ashby](https://github.com/AshbySan) (Sever Admin)<br>
> David Thatcher (Lead Programmer)<br>
> Bronson Mercer (Programmer)

### Year 2:

> [Lucy Leix](https://github.com/LU-SIFE) (Project Lead)<br>
> Hannah (Designer/Front End)<br>
> Kyle (Front End)<br>
> Regan (Programmer/Front End)<br>
> Ty (Lead Programmer)<br>

to setup xamp tables:
```
CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');
```

## SITEMAP

```
index.php (login)
	|
	└ Dashboard.php
		|
		└ Logout.php (return to index)
		  patients.php
			|
		  	└ public/publichome.php (appleseed dashboard)
```

## Things to do:

- Remove RASS, INTAKE AND OUTPUT, PO INTAKE
- collapsable Vital inputs
