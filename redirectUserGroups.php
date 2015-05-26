if(empty($usergroups))
    return;

switch (TRUE) {
    case in_array('Web Administrators', $usergroups):
        $_REQUEST['redirectBack'] = '14';
        break;
    case in_array('Platinum Members', $usergroups):
        $_REQUEST['redirectBack'] = '19';
        break;
    case in_array('Gold Members', $usergroups):
        $_REQUEST['redirectBack'] = '16';
        break;
    case in_array('Silver Members', $usergroups):
        $_REQUEST['redirectBack'] = '18';
        break;
    default:
        $_REQUEST['redirectBack'] = '1';
        break;
}

return;
