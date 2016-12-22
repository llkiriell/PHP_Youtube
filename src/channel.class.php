<?php
class Channel{
    
    private $channelId;
    
    public function __construct($ch_id){
        $this->channelId=$ch_id;
    }
    
    public function getChannelId(){
        return $this->channelId;
    }
    //Informacion basica de un video
    public function getBasicInfoOnlyVideo($videoId){
        $urlQuery ='https://www.googleapis.com/youtube/v3/videos?id='.$videoId.'&key='.API_KEY_YOUTUBE.'&part=snippet&fields=items(snippet(title,description))';
        $data_video = json_decode(file_get_contents($urlQuery),true);
        return $data_video;
    }
    //Informacion del canal
    public function getInfoChannel(){
        $urlQuery = 'https://www.googleapis.com/youtube/v3/channels?id='.$this->channelId.'&key='.API_KEY_YOUTUBE.'&part=snippet,statistics&fields=items(snippet(title,thumbnails(medium)),statistics(subscriberCount,videoCount))';
        $data_channel = json_decode(file_get_contents($urlQuery),true);
        return $data_channel;
    }
    //Información de lista de videos
    public function getChannelListVideos(){
        $urlQuery = 'https://www.googleapis.com/youtube/v3/search?channelId='.$this->channelId.'&key='.API_KEY_YOUTUBE.'&part=snippet&fields=items(id(videoId),snippet(title,description))';
        $data_list = json_decode(file_get_contents($urlQuery),true);
        return $data_list;
    }   
}
?>