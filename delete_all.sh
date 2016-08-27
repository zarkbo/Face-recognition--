#!/bin/bash
$1 > ./90.txt
curl "https://apicn.faceplusplus.com/v2/group/remove_person?api_secret=$2&api_key=$1&person_id=all&group_name=$3" >./deleteall.txt
grep -Po '(?<=\"removed\"\:\ ).*(?=\,)' ./deleteall.txt > ./deletemessage.txt
