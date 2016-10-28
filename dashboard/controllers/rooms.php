<?php
class Rooms extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::isAuth($_SESSION);
    }

    function index()
    {
        $this->view->render('rooms/index');
    }

    function rotate_up($id)
    {
        # Тут идёт просто подём поля positions то есть как Views + 1
    }

    function rotate_down($id)
    {
        # Тут идёт просто опускание поля positions то есть как Views - 1 думаю что получится по такой схеме
    }

    function edit($id)
    {
        $this->view->id = $id;
        $this->view->render('rooms/edit/index');
    }

    function delete($id)
    {
        $id = intval($id);

        $q = DB::run()->prepare("DELETE FROM tbl_rooms WHERE id = :id");
        $q->execute(array(':id' => $id));

        Redirect::to('rooms');
    }

    function update()
    {
        $id = intval($_POST['room_id']);

        $data = array();

        $data['id']                  = $id;
        $data['typeis']              = Security::escape($_POST['typeis']);
        $data['meta_description']    = Security::escape($_POST['meta_description']);
        $data['meta_keywords']       = Security::escape($_POST['meta_keywords']);
        $data['tags']                = $_POST['tags'];
        $data['room_types']          = Security::escape($_POST['room_types']);
        $data['page_alias']          = $_POST['page_alias'];
        $data['booking_room']        = $_POST['booking_room'];
        $data['address']             = $_POST['address'];
        $data['content']             = $_POST['content'];
        $data['title']               = $_POST['title'];
        $data['img_title_start']     = $_POST['img_title_start'];
        $data['img_title_end']       = $_POST['img_title_end'];
        $data['gallery_folder_name'] = $_POST['gallery_folder_name'];

        $q = DB::run()->prepare("UPDATE tbl_rooms SET typeis = :typeis, meta_description = :meta_description, meta_keywords = :meta_keywords, tags = :tags,
                room_types = :room_types, page_alias = :page_alias, booking_room = :booking_room, address = :address, content = :content, title = :title,
                img_title_start = :img_title_start, img_title_end = :img_title_end, gallery_folder_name = :gallery_folder_name
                WHERE id = :id");
        $q->execute(array(
            ':typeis'              => $data['typeis'],
            ':meta_description'    => $data['meta_description'],
            ':meta_keywords'       => $data['meta_keywords'],
            ':tags'                => $data['tags'],
            ':room_types'          => $data['room_types'],
            ':page_alias'          => $data['page_alias'],
            ':booking_room'        => $data['booking_room'],
            ':address'             => $data['address'],
            ':content'             => $data['content'],
            ':title'               => $data['title'],
            ':img_title_start'     => $data['img_title_start'],
            ':img_title_end'       => $data['img_title_end'],
            ':gallery_folder_name' => $data['gallery_folder_name'],
            ':id'                  => $data['id']
        ));

        Redirect::to('rooms');
    }

    function newRoom()
    {
        $this->view->render('rooms/new/index');
    }

    function addNewRoom()
    {
        $data = array();

        $data['typeis']              = Security::escape($_POST['typeis']);
        $data['meta_description']    = Security::escape($_POST['meta_description']);
        $data['meta_keywords']       = Security::escape($_POST['meta_keywords']);
        $data['tags']                = $_POST['tags'];
        $data['room_types']          = Security::escape($_POST['room_types']);
        $data['page_alias']          = $_POST['page_alias'];
        $data['booking_room']        = $_POST['booking_room'];
        $data['address']             = $_POST['address'];
        $data['content']             = $_POST['content'];
        $data['title']               = $_POST['title'];
        $data['img_title_start']     = $_POST['img_title_start'];
        $data['img_title_end']       = $_POST['img_title_end'];
        $data['gallery_folder_name'] = $_POST['gallery_folder_name'];
        $data['img1']                = $_POST['img1'];
        $data['img2']                = $_POST['img2'];
        $data['img3']                = $_POST['img3'];
        $data['img4']                = $_POST['img4'];
        $data['img5']                = $_POST['img5'];
        $data['img6']                = $_POST['img6'];
        $data['img7']                = $_POST['img7'];
        $data['img8']                = $_POST['img8'];
        $data['img9']                = $_POST['img9'];
        $data['img10']               = $_POST['img10'];
        $data['img11']               = $_POST['img11'];
        $data['img12']               = $_POST['img12'];
        $data['img13']               = $_POST['img13'];
        $data['img14']               = $_POST['img14'];
        $data['img15']               = $_POST['img15'];
        $data['img16']               = $_POST['img16'];
        $data['img17']               = $_POST['img17'];

        $q = DB::insertData('tbl_rooms', array(
            'typeis'              => $data['typeis'],
            'meta_description'    => $data['meta_description'],
            'meta_keywords'       => $data['meta_keywords'],
            'tags'                => $data['tags'],
            'room_types'          => $data['room_types'],
            'page_alias'          => $data['page_alias'],
            'booking_room'        => $data['booking_room'],
            'address'             => $data['address'],
            'content'             => $data['content'],
            'title'               => $data['title'],
            'img_title_start'     => $data['img_title_start'],
            'img_title_end'       => $data['img_title_end'],
            'gallery_folder_name' => $data['gallery_folder_name'],
            'img1'                => $data['img1'],
            'img2'                => $data['img2'],
            'img3'                => $data['img3'],
            'img4'                => $data['img4'],
            'img5'                => $data['img5'],
            'img6'                => $data['img6'],
            'img7'                => $data['img7'],
            'img8'                => $data['img8'],
            'img9'                => $data['img9'],
            'img10'               => $data['img10'],
            'img11'               => $data['img11'],
            'img12'               => $data['img12'],
            'img13'               => $data['img13'],
            'img14'               => $data['img14'],
            'img15'               => $data['img15'],
            'img16'               => $data['img16'],
            'img17'               => $data['img17'],
            'views'               => 1
        ));

        Redirect::to('rooms');
    }


}
