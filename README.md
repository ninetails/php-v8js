# ninetails/php-v8js

This is only a test using [stesie/v8js](https://hub.docker.com/r/stesie/v8js/) generating a React component.

## Git submodule

    git submodule init

## Build

    docker build --rm -t ninetails/php-v8js . < ./Dockerfile

## Run

    docker run -it --rm -p 80:80 -v ${PWD}/../:/root/teste ninetails/php-v8js

## ssh

Using `docker-ssh`. This image is based on [baseimage-docker](https://github.com/phusion/baseimage-docker).
