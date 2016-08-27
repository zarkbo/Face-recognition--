face_id=$(cat ./face_id.txt)
personname=$(cat ./personname.txt)
curl "https://apicn.faceplusplus.com/v2/person/add_face?api_secret=QAmF4gESlmgpefFE9WpDrkdqWadvYJGr&face_id=$face_id&api_key=eb298f53b865d1fcd705c65edf8e89e2&person_name=$personname"
