curl "https://apicn.faceplusplus.com/v2/train/identify?api_secret=$2&api_key=$1&group_name=$3" >./traingroup.txt
grep -Po '(?<=\"session_id\"\:\ ").*(?=\")' traingroup.txt >traingroup_id.txt
