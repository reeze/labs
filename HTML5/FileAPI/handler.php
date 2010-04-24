<?php
// 直接将从客户端发送过来的数据返回
echo htmlentities(file_get_contents('php://input'));
