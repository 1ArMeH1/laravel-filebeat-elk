# laravel-filebeat-elk
Laravel Log Management Using Filebeat + ELK (Elastic Search, Logstash and Kibana)

## About 

Log management is one of the most important parts of your application especially when your application grows, in the mature application with heavy load it’s very crucial to track the event that occur in the system to avoid from a disaster situation and system collapse and solution is log management involves storing, rotation, filter, visualization and analysis
One of the popular and robust approach of log management is ELK (Elastic Search, Logstash and Kibana), In this project I integrated ELK with Laravel application.

Note: You could read my medium article about Laravel Log Management Using Filebeat + ELK <a href="https://medium.com">Here</a>


## Localhost Installation
1 - Start Infrastructure:cd {project_directory}/elk and run: docker compose up -d 

2 - Start Laravel:
- Clone project
- cd {project_directory}
- composer install
- php artisan serve

## Post Man Collection

<a href="https://medium.com">PostMan Collection</a>
