<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Name:  Ion Auth ACL
 *
 * Version: 1.0.0
 *
 * Author: Steve Goodwin
 *		  steve@weblogics.co.uk
 *         @steveg1987
 *
 * Location: http://github.com/steve-goodwin/ion_auth_acl
 *
 * Created:  18.09.2015
 *
 * Description:  Add's ACL (access control list) based on the existing Ion Auth library for codeigniter
 *
 * Requirements: PHP5 or above
 *
 */

/*
| -------------------------------------------------------------------------
| Tables.
| -------------------------------------------------------------------------
| Database table names.
*/
$config['tables']['permissions'] = 'permissions';
$config['tables']['group_permissions'] = 'groups_permissions';
$config['tables']['users_permissions'] = 'users_permissions';

/*
 | Permissions table column and Users / Groups permissions table column's you want to join WITH.
 |
 | Joins from permissions.perm_id
 */
$config['join']['permissions'] = 'perm_id';

/*
 | -------------------------------------------------------------------------
 | Authentication options.
 | -------------------------------------------------------------------------
 | Default admin permission = admin_access
 */
$config['admin_permission'] = 'admin_access'; // Default administrators permission, use key

/*
 | -------------------------------------------------------------------------
 | Message Delimiters.
 | -------------------------------------------------------------------------
 */
$config['delimiters_source'] = 'config'; // "config" = use the settings defined here, "form_validation" = use the settings defined in CI's form validation library
$config['message_start_delimiter'] = '<p>'; // Message start delimiter
$config['message_end_delimiter'] = '</p>'; // Message end delimiter
$config['error_start_delimiter'] = '<p>'; // Error message start delimiter
$config['error_end_delimiter'] = '</p>'; // Error message end delimiter

/* End of file ion_auth_acl.php */
/* Location: ./application/config/ion_auth_acl.php */
