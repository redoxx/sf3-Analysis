#!/bin/bash
sudo bin/console cache:clear
sudo chmod a+w -R var/cache/*
sudo chmod a+w -R var/logs/*
sudo chmod a+w -R var/sessions/*
