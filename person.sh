personname=$(cat ./personname.txt)
echo $personname
curl "https://apicn.faceplusplus.com/v2/person/create?api_secret=$2&api_key=$1&person_name=$personname&group_name=$3" > ./person.txt
grep -Po '(?<=\"person_id\"\:\ ").*(?=\")' ./person.txt > ./person_id.txt
