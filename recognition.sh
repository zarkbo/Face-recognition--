url=$(cat ./url_id.txt)
curl "https://apicn.faceplusplus.com/v2/recognition/identify?url=$url&api_secret=$2&api_key=$1&group_name=$3" > ./URL.txt
grep -m1 -C0 -Po '(?<=\"confidence\"\:\ ).*(?=\,)' ./URL.txt >./gailv.txt
grep -m1 -C0 -Po '(?<=\"person_name\"\:).*(?=\,)' ./URL.txt >./personname.txt
