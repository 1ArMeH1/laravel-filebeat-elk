# laravel-filebeat-elk
Laravel Log Management Using Filebeat + ELK (Elastic Search, Logstash and Kibana)

<img src="https://dytvr9ot2sszz.cloudfront.net/wp-content/uploads/2017/06/shippers-diagram.jpg"/>

## About 

Log management is one of the most important parts of your application especially when your application grows, in the mature application with heavy load it’s very crucial to track the event that occur in the system to avoid from a disaster situation and system collapse and solution is log management involves storing, rotation, filter, visualization and analysis
One of the popular and robust approach of log management is ELK (Elastic Search, Logstash and Kibana), In this project I integrated ELK with Laravel application.

## Note: You could read my medium article about Laravel Log Management Using Filebeat + ELK [Here](https://medium.com/@mehraien.arash/laravel-log-management-using-filebeat-elk-elastic-search-logstash-and-kibana-be7db5985bd6)


## Localhost Installation
1 - Start Infrastructure:cd {project_directory}/elk and run: docker compose up -d 

2 - Start Laravel:
- Clone project
- cd {project_directory}
- composer install
- php artisan serve

## Post Man Collection

[PostMan Collection](https://github.com/1ArMeH1/laravel-filebeat-elk/blob/main/ELK-log-management.postman_collection.json)
