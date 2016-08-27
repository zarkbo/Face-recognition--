person_name=$(cat ./personname.txt)
curl "https://apicn.faceplusplus.com/v2/person/delete?api_secret=$2&api_key=$1&person_name=$person_name" > person.txt
