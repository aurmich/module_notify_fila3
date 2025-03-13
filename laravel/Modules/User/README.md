# Project Manager

## Installation
download/clone a new project/base

- git clone https://github.com/quaeris-tv/base_quaeris_fila3.git --recurse-submodules --depth 1 -b dev
- git submodule foreach git stash

- fix the .env
- create db
- go to the laravel folder and run the composer install command
- run migrations
- create junction
- to create junction, do it via cmd, go to the folder where you want to create the junction and under the cmd run
mklink /j junction_folder_name project_folder_path
- restart the server after the junction creation

run quaerisf3.local on the browser

windows
sudo docker-compose up -d
linux
sudo docker-compose up -d

sudo docker exec -it laravel-app bash