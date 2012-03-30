# Doctrine MongoDB Object Document Mapper with Symfony 1.4


This build includes symfony project setup with mongodbodm.

The following symfony2 components have been used.

* class-loader
* console
* yaml

ProjectConfiguration has been enabled for using mongodb

# Installation:
	1. Clone the repo to your local machine.
	2. Run the following commands  from repo root
		$ git submodule init
		$ git submodule update
	3. cd to lib/vendor/mongodb-odm
	4. Run curl -s http://getcomposer.org/installer | php
	5. Run php composer.phar install
	6. clear the cache
	
# Usage
	1. create an odm.yml in config folder
        2. Configure the database as follows:
            odm:
              database: testdb
        3. Initialize a document manager object by using sfDocumentManager::getDocumentManager()
        4. Database can be changed using sfDocumentManager::setDatabase($database)
        5. Doctrine ODM Configuration object can retrieved using sfDocumentManager::getConfiguration()

	


## More resources:

* [Website](http://www.doctrine-project.org/projects/mongodb_odm)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-mongodb-odm/en/latest/index.html)
* [API](http://www.doctrine-project.org/api/mongodb_odm/1.0/index.html)
* [Issue Tracker](http://www.doctrine-project.org/jira/browse/MODM)
* [Downloads](http://github.com/doctrine/mongodb-odm/downloads)