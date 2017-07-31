RESTful-API
Create RESTful API

    Create project in github
    No frameworks/libs
    Write your own router
    Result should be JSON
    Work with git till you finish the task
    Export database in db.sql

Database requirements MySQL 
```
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `position` (`position`),
  CONSTRAINT `position - jobs` FOREIGN KEY (`position`) REFERENCES `jobs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
```
Backend requirements PHP - 
PHP 5.2+ and Mysql

*Endpoints*:
* /jobs/list 
* /jobs/{id} 
* /candidates/list 
* /candidates/review/{id} 
* /candidates/search/{id}
