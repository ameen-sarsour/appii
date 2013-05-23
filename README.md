# appii

## New Feature
Cache with Redis

Bootstrap Theme

WYSIWYG widget - Redactore

Add Font: Uthman Taha and Uthman Taha Bold

Remove unsed files - like language

Translate text

Add bootstrap

Integrate with elastic search


## Yii structured app
appii <br/>
└──	protected <br/>
│	├──controller   <br/>
│	├──components  <br/>
│	├──config <br/>
│	│	├──main.php <br/>
│	│	├──local.php <br/>
│	├──data <br/>
│	├──extension <br/>
│	│	├──YiiBoosterRtl <br/>
│	│	├──imperavi-redactor-widget <br/>
│	│	├──mailer <br/>
│	│	├──redis <br/>
│	├──models <br/>
│	├──runtime <br/>
│	├──tests <br/>
│	├──view <br/>
│	│	├──. <br/>
│	│	├──. <br/>
│	│	├──etc <br/>
└──public_web <br/>

	
## Index Elastic
go to APIIHOME/protected <br/>
./cmdrun elastic create <br/>
./cmdrun elastic map --type=MODEL_NAME <br/>
./cmdrun elastic import --type=MODEL_NAME <br/>
./cmdrun elastic  search --term=SEARCH --type=MODEL_NAME 

## Requirment 
Redis 
yum install php-redis

Elastic

wget https://download.elasticsearch.org/elasticsearch/elasticsearch/elasticsearch-0.90.0.noarch.rpm

sudo yum install elasticsearch-0.90.0.noarch.rpm
service elasticsearch start