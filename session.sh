train_group=$(cat ./traingroup_id.txt)
curl "https://apicn.faceplusplus.com/v2/info/get_session?api_secret=QAmF4gESlmgpefFE9WpDrkdqWadvYJGr&api_key=eb298f53b865d1fcd705c65edf8e89e2&session_id=$train_group" >./session.txt
grep -Po '(?<=\"success\"\:\ ").*(?=\")' ./session.txt >./result.txt
