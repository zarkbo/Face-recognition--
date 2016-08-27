#!bin/sh
grep -Po '(?<=\"person_id\"\:\ ").*(?=\")' person.txt >person_id.txt
