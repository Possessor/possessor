# Possessor

An easy to use tool to verify ownership of websites.

## How To Use

### Requirements

You must have [Docker](https://docker.io) installed.  So far, this has only been tested with a Mac.

[todo]

## Development

First, see the **Requirements** section of **How To Use**.  

Then, start the docker containers by executing the following command:

`docker-compose up -d`

### Helpful Tips

To access the PHP docker container as a shell, run the following helper command:

`bin/php/sh`

[todo]

## Rationale

I was considering how to verify ownership of sites before I run security scans on them during my work at [More Better Faster](https://morebetterfaster.io).  I remember
Google had a way of doing it via DNS and via files. I decided I could make my own tool to do that, and open source it so others can use it, too.
