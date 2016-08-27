#CURRENT_DIR=`dirname "$0"`
#export FACE_RECOGNITION_HOME=`cd "$CURRENT_DIR/.."; pwd`
#group_name=zxcvbnm
#YOUR_API_KEY="eb298f53b865d1fcd705c65edf8e89e2"
#YOUR_API_SECRET="QAmF4gESlmgpefFE9WpDrkdqWadvYJGr"
sh zhanghao.sh
curl "https://apicn.faceplusplus.com/v2/group/create?api_key=eb298f53b865d1fcd705c65edf8e89e2&api_secret=QAmF4gESlmgpefFE9WpDrkdqWadvYJGr&tag=created_by_Alice&group_name=$group_name" >group.txt

