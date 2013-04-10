<?php

class bdApi_FileSums
{
	public static function getHashes()
	{
		return array (
  'library/bdApi/ControllerAdmin/AuthCode.php' => 'defb34b7f3b9fed82d341238c25c96c7',
  'library/bdApi/ControllerAdmin/Client.php' => '069b67a7330f58e51629e68ecc34c1ae',
  'library/bdApi/ControllerAdmin/RefreshToken.php' => '08ce0d77da86adddcd7d547af8bedd8f',
  'library/bdApi/ControllerAdmin/Token.php' => 'da5f80b4e8646b551b970cc13c384112',
  'library/bdApi/ControllerApi/Abstract.php' => 'c60545dcbcb08fd298c2d6d7bce8fa7f',
  'library/bdApi/ControllerApi/Asset.php' => '05002f22f8158d4de40adc45ebdca442',
  'library/bdApi/ControllerApi/Error.php' => 'f3bf76d3c860390acd9b4dc5b23d2218',
  'library/bdApi/ControllerApi/Index.php' => 'b3ee04c5a915519f083f94ed2f5afba9',
  'library/bdApi/ControllerApi/Node.php' => '627ceef1a36ec86e94c7ebc5164c04f2',
  'library/bdApi/ControllerApi/OAuth.php' => 'cb84c3814f496402c4cb87e2582da558',
  'library/bdApi/ControllerApi/Post.php' => 'ae945de169b655c89656d7f81788ac77',
  'library/bdApi/ControllerApi/Thread.php' => '6993fc79a0deeb2e0b0cff4baef80276',
  'library/bdApi/ControllerApi/User.php' => 'e1c6d5dc178960584bb4aa36a5eaa193',
  'library/bdApi/CronEntry/CleanUp.php' => '2bdb4b4f0c1218eb5e39dc6221b5ce8c',
  'library/bdApi/Data/Helper/Core.php' => '2070d3fcf164d6cf2cca0df4d623a29a',
  'library/bdApi/DataWriter/AuthCode.php' => '52aa68ad700b37ecc1fa20b81c01b62e',
  'library/bdApi/DataWriter/Client.php' => '7e81d530db1b4dd01e2bb474d15214d1',
  'library/bdApi/DataWriter/RefreshToken.php' => '710fe939a3bdfb84f4bfc080a7a4cb0b',
  'library/bdApi/DataWriter/Token.php' => 'f92610daf3a17646ea592031a448925b',
  'library/bdApi/Dependencies.php' => 'f51550151e6ed4c9db38ff84dc58ef64',
  'library/bdApi/Installer.php' => '63e7a28f5c9c6ca693a31385fb3e1aec',
  'library/bdApi/Link.php' => 'ba8ae27808542b58849e1a0bb7f50011',
  'library/bdApi/Listener.php' => '85bccb49006a44989a140e38ad011282',
  'library/bdApi/Model/AuthCode.php' => '25b6e0db62025eda69d24ed501805b2e',
  'library/bdApi/Model/Client.php' => '311f3be617cd17e8a0e6813c452fbba6',
  'library/bdApi/Model/OAuth2.php' => 'c87e6a163a32a21b63b56ba0fd809260',
  'library/bdApi/Model/RefreshToken.php' => '7a430f94b86039910f7209b48006e0b7',
  'library/bdApi/Model/Token.php' => '6815eea2d66471831026766c26a1d33f',
  'library/bdApi/OAuth2.php' => '8bfa2677fac03eecac2e0cd8ed7449a6',
  'library/bdApi/Option.php' => 'c258d48492b9cb1931fff33ad6a65635',
  'library/bdApi/Route/PrefixAdmin/AuthCode.php' => '6ae4cf1aafaf43f7ae7cd5d9d0a0df9b',
  'library/bdApi/Route/PrefixAdmin/Client.php' => '0ec3878d436cabf75f699c1b0adc6633',
  'library/bdApi/Route/PrefixAdmin/RefreshToken.php' => '785792de37c97cca302374430d5c5063',
  'library/bdApi/Route/PrefixAdmin/Token.php' => '3c72b187ee2214d004c93ae1b3bb5943',
  'library/bdApi/Route/PrefixApi/Abstract.php' => '1182fa6d6ae9c59b8c8763ac5386d263',
  'library/bdApi/Route/PrefixApi/Assets.php' => '3df9baa8e5c917b2437259a379a9fe4b',
  'library/bdApi/Route/PrefixApi/Index.php' => '9418441be460acc37ef2ffb407ae23a9',
  'library/bdApi/Route/PrefixApi/Nodes.php' => '558815f2e9f7e0d6e7e2cccebbce1d8c',
  'library/bdApi/Route/PrefixApi/OAuth.php' => '39d1a2a2f40c8dd154893d382fa5a6d7',
  'library/bdApi/Route/PrefixApi/Posts.php' => 'd6f00027a71e6e4788c6d55312e29fdd',
  'library/bdApi/Route/PrefixApi/Threads.php' => '977a33c0f82ba496878d2ae3df3d3812',
  'library/bdApi/Route/PrefixApi/Users.php' => 'bcabdb45ab1c8fc4c8f9951c21dd35cb',
  'library/bdApi/Route/PrefixApi.php' => '375ed6adecf3fc3c771ac8f1f044a417',
  'library/bdApi/Session.php' => 'f3250a5d067e2ec79e8397ad47786b4e',
  'library/bdApi/Template/Helper/Core.php' => '8d0ca801b21a0248a9026e303d7792df',
  'library/bdApi/ViewApi/Base.php' => 'd34b8eac08c2261ec328dfbdb99f0154',
  'library/bdApi/ViewPublic/Account/Api/Data.php' => '86589c3880cc5d666e016bc5dc6eb696',
  'library/bdApi/ViewPublic/Account/Api/Index.php' => 'f444684f7065ddb4684db5b269a6a4e5',
  'library/bdApi/ViewPublic/Account/Authorize.php' => '600db6b57fb202c473636660e44018fe',
  'library/bdApi/ViewRenderer/Json.php' => '4e17df7246f9f0b6df3009790f26f604',
  'library/bdApi/ViewRenderer/Xml.php' => '8236228096b9d033c06e31a486cc228b',
  'library/bdApi/XenForo/ControllerPublic/Account.php' => '8bc1389b00e829d89af9691f80240caf',
  'library/bdApi/XenForo/ControllerPublic/Register.php' => '642c121cac314fc5aa4eeb4366d1c7b8',
  'library/bdApi/XenForo/Model/Node.php' => '375a3a5e66a537fc785dad71f6aaac6a',
  'library/bdApi/XenForo/Model/Post.php' => '6b1748f4de7f19f9dcb02da127247ab7',
  'library/bdApi/XenForo/Model/Thread.php' => '33843b151881d6a634ea4df0f946c085',
  'library/bdApi/XenForo/Model/User.php' => '4ad4856d9689de73738c4b4b1422270a',
  'js/bdApi/full/sdk.js' => '92823e985f72431eb8a0fa5af88efb8d',
);
	}
}