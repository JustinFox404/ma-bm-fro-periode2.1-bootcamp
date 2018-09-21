<?php
/**
 * Created by PhpStorm.
 * User: emile
 * Date: 9/21/2018
 * Time: 2:07 PM
 */
if(!isset($_GET['id'])) die(json_encode(array("valid" => false)));
$id = $_GET['id'];
if($id == 1) {
    die(json_encode(array(
        "titel" => "opdracht 1",
        "name" => "bob de bouwer",
        "role" => "Student MediaCollege",
        "opdracht" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "uitwerking" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia eu sapien ut gravida. Nulla sed congue dui, commodo tristique eros. Nullam et egestas nisi, gravida pretium diam. Vestibulum porta sem quis nulla suscipit, et pharetra tellus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac magna turpis. Quisque vitae diam at tortor egestas ullamcorper. Donec aliquet lobortis orci, porta pretium lorem commodo at. Praesent tristique nibh ut vehicula lacinia. Sed et ipsum id orci sodales interdum. Vivamus eget tincidunt nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at est tempor, convallis nibh facilisis, interdum sem. Mauris et justo dictum, imperdiet ipsum at, molestie nisi. Vivamus quis augue interdum, hendrerit velit quis, faucibus urna.

Nullam pretium, arcu sed facilisis euismod, dolor nisl eleifend turpis, eu fringilla mauris nisi quis urna. Nunc semper, metus et laoreet commodo, augue lectus ullamcorper lectus, sed commodo quam lacus sit amet magna. Maecenas non pretium magna. Ut rhoncus, libero et pharetra tincidunt, metus leo tempus sem, ac dictum erat lorem vitae nisi. Aenean mattis nec ligula eu semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eget lacinia tortor. Proin in porta libero. Vivamus tristique dictum leo. Praesent tristique, urna at facilisis viverra, augue nisl bibendum felis, id ultrices lorem urna laoreet ante.

Praesent pharetra semper efficitur. In hac habitasse platea dictumst. Sed consectetur accumsan massa, placerat tincidunt enim porta vel. Curabitur finibus justo lorem, eget vulputate est tempor at. Nullam bibendum ullamcorper egestas. Integer at lacus vitae nunc egestas aliquam id vitae enim. Pellentesque id metus mauris. Mauris at mauris mi. Mauris eleifend libero a enim blandit rhoncus. Nunc sed lacus ligula. Fusce et maximus neque. Cras nisl leo, molestie non ante sit amet, auctor semper quam. In quis commodo quam.

Mauris in urna eget diam imperdiet tempus. Nunc tincidunt ultricies vehicula. Suspendisse potenti. Maecenas tellus velit, ullamcorper fermentum imperdiet id, lacinia in magna. Aliquam scelerisque, est eget semper vestibulum, lectus massa faucibus justo, in volutpat ipsum ante at arcu. Aenean et finibus justo. Aliquam elementum magna posuere libero aliquet accumsan. Integer consequat justo et odio tempor consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris id magna neque.

Ut convallis aliquam fringilla. Integer interdum neque felis, consequat accumsan quam lobortis sed. Maecenas sed feugiat nulla, ut pharetra nibh. Aenean a elit rhoncus, vestibulum nisi vitae, tincidunt ligula. Vivamus sed sapien in leo pharetra sagittis ac ac diam. Duis aliquet velit vitae nisi condimentum, a consequat justo suscipit. Praesent commodo ultrices aliquet. Maecenas non tempus est.",
        "img" => "https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2017/04/blue/16903216-1-eng-GB/Blue_node_full_image_2.jpg"
    )));
} else {
    if($id == 2) {
        die(json_encode(array(
            "titel" => "opdracht 2",
            "name" => "bob de pawel",
            "role" => "CEO van Google",
            "opdracht" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "uitwerking" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia eu sapien ut gravida. Nulla sed congue dui, commodo tristique eros. Nullam et egestas nisi, gravida pretium diam. Vestibulum porta sem quis nulla suscipit, et pharetra tellus semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac magna turpis. Quisque vitae diam at tortor egestas ullamcorper. Donec aliquet lobortis orci, porta pretium lorem commodo at. Praesent tristique nibh ut vehicula lacinia. Sed et ipsum id orci sodales interdum. Vivamus eget tincidunt nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi at est tempor, convallis nibh facilisis, interdum sem. Mauris et justo dictum, imperdiet ipsum at, molestie nisi. Vivamus quis augue interdum, hendrerit velit quis, faucibus urna.

Nullam pretium, arcu sed facilisis euismod, dolor nisl eleifend turpis, eu fringilla mauris nisi quis urna. Nunc semper, metus et laoreet commodo, augue lectus ullamcorper lectus, sed commodo quam lacus sit amet magna. Maecenas non pretium magna. Ut rhoncus, libero et pharetra tincidunt, metus leo tempus sem, ac dictum erat lorem vitae nisi. Aenean mattis nec ligula eu semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent eget lacinia tortor. Proin in porta libero. Vivamus tristique dictum leo. Praesent tristique, urna at facilisis viverra, augue nisl bibendum felis, id ultrices lorem urna laoreet ante.

Praesent pharetra semper efficitur. In hac habitasse platea dictumst. Sed consectetur accumsan massa, placerat tincidunt enim porta vel. Curabitur finibus justo lorem, eget vulputate est tempor at. Nullam bibendum ullamcorper egestas. Integer at lacus vitae nunc egestas aliquam id vitae enim. Pellentesque id metus mauris. Mauris at mauris mi. Mauris eleifend libero a enim blandit rhoncus. Nunc sed lacus ligula. Fusce et maximus neque. Cras nisl leo, molestie non ante sit amet, auctor semper quam. In quis commodo quam.

Mauris in urna eget diam imperdiet tempus. Nunc tincidunt ultricies vehicula. Suspendisse potenti. Maecenas tellus velit, ullamcorper fermentum imperdiet id, lacinia in magna. Aliquam scelerisque, est eget semper vestibulum, lectus massa faucibus justo, in volutpat ipsum ante at arcu. Aenean et finibus justo. Aliquam elementum magna posuere libero aliquet accumsan. Integer consequat justo et odio tempor consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris id magna neque.

Ut convallis aliquam fringilla. Integer interdum neque felis, consequat accumsan quam lobortis sed. Maecenas sed feugiat nulla, ut pharetra nibh. Aenean a elit rhoncus, vestibulum nisi vitae, tincidunt ligula. Vivamus sed sapien in leo pharetra sagittis ac ac diam. Duis aliquet velit vitae nisi condimentum, a consequat justo suscipit. Praesent commodo ultrices aliquet. Maecenas non tempus est.",
            "img" => "https://newen.swps.pl/images/BIO-pawel-boski.jpg"
        )));
    }

}
