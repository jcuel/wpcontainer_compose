# wpcontainer_compose
Wordpress container with compose

#WORK IN PROGRESS. . . STILL NOT FUNCTIONAL .. DEBUGGING YAML

# Without networks

root@containerhost:/home/instructor/projects/wpcontainer_compose# docker-compose up -d
ERROR: Service "db" uses an undefined network "backend-net"
root@containerhost:/home/instructor/projects/wpcontainer_compose# nano docker-compose.yml

#with networks either at bottom or top.....

root@containerhost:/home/instructor/projects/wpcontainer_compose# docker-compose up -d
ERROR: The Compose file './docker-compose.yml' is invalid because:
'netowrks' does not match any of the regexes: '^x-'

You might be seeing this error because you're using the wrong Compose file version. Either specify a supported version (e.g "2.2" or "3.3") and place your service definitions under the `services` key, or omit the `version` key and place your service definitions at the root of the file to use version 1.
For more on the Compose file format versions, see https://docs.docker.com/compose/compose-file/
