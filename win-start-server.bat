docker-compose -p test-app pull
docker-compose -p test-app build --pull
docker-compose -p test-app up --remove-orphans -d
