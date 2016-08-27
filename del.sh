#group_name=zxcvbnm
#YOUR_API_KEY=eb298f53b865d1fcd705c65edf8e89e2
#YOUR_API_SECRET=QAmF4gESlmgpefFE9WpDrkdqWadvYJGr
sh zhanghao.sh
curl "https://apicn.faceplusplus.com/v2/group/delete?api_secret=$YOUR_API_SECRET&api_key=$YOUR_API_KEY&group_name=zxcvbnm" >group.txt
