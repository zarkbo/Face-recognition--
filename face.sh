#!/bin/sh
url=$(cat url_id.txt)
echo $url
curl "http://apicn.faceplusplus.com/v2/detection/detect?api_key=$1&api_secret=$2&url=$url&attribute=glass,pose,gender,age,race,smiling" > ./face.txt
grep -Po '(?<=\"face_id\"\:\ ").*(?=\")' ./face.txt > ./face_id.txt
face_id=$(cat ./face_id.txt)
personname=$(cat ./personname.txt)
curl "https://apicn.faceplusplus.com/v2/person/add_face?api_secret=$2&face_id=$face_id&api_key=$1&person_name=$personname" >./guanlian.txt
#sh mvface.sh
