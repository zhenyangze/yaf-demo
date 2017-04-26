<?php
/**
* @file application/models/Service/User/User.php
*
* @author zhenyangze
* @mail   zhenyangze@gmail.com
* @time   一  4/24 00:01:14 2017
*/
namespace Service\User;

class UserModel extends \Service\AbstractModel
{
    public function getUserInfoById($id)
    {
        if (empty($id)) {
            \Error\ErrorModel::throwException('10002');
        }

        return [
            'id' => $id,
            'name' => 'testUser',
            'mobile' => 13260000000,
            'mail' => 'test@dev.com',
            'role' => 'student',
        ];
    }
}
