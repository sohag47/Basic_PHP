setup:
	@make db-directory
	@make up
	@make ps
# build:
# 	docker compose build --no-cache --force-rm
db-directory:
	mkdir mariadb
up:
	docker compose up -d
ps: 
	docker ps
stop:
	docker compose stop 