# APILead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lead_id** | **int** | Unique ID for the Lead record | [optional] 
**salutation** | **string** | Salutation | [optional] 
**title** | **string** | Salutation | [optional] 
**first_name** | **string** | First/Given Name | [optional] 
**last_name** | **string** | Last/Family/Surname of the Lead | 
**organization_name** | **string** | Organisation Name | [optional] 
**phone_number** | **string** | Phone Number | [optional] 
**mobile_phone_number** | **string** | Mobile Phone Number | [optional] 
**fax_number** | **string** | Fax Number | [optional] 
**email_address** | **string** | Email Address | [optional] 
**website_url** | **string** | Website URL Address | [optional] 
**owner_user_id** | **int** | User ID of the Lead owner | [optional] 
**date_created_utc** | [**\DateTime**](\DateTime.md) | Date and time Lead record creates, as Coordinated Universal Time (read only, automatically generated by server) | [optional] 
**date_updated_utc** | [**\DateTime**](\DateTime.md) | Date and time Lead record updated, as Coordinated Universal Time (read only, automatically generated by server) | [optional] 
**converted** | **bool** | IsConverted Lead | [optional] 
**converted_date_utc** | [**\DateTime**](\DateTime.md) | Date and time Lead record converted to opportunity, as Coordinated Universal Time (read only, automatically generated by server) | [optional] 
**converted_contact_id** | **int** | The Contact ID resulted from a Lead conversion process to Opportunity | [optional] 
**converted_organization_id** | **int** | The Opportunity ID resulted from a Lead conversion process | [optional] 
**converted_opportunity_id** | **int** | The Opportunity ID resulted from a Lead conversion process | [optional] 
**visible_to** | **string** | This field can have one of the following values: &#39;Everyone&#39; (Default), &#39;Owner&#39;, &#39;Team&#39;, or &#39;Individuals&#39;.\&quot; | [optional] 
**responsible_user_id** | **int** | Responsible User&#39;s ID. | [optional] 
**industry** | **string** | The associated Industry | [optional] 
**lead_status_id** | **int** | Lead Statuses which will be having a value pair of (status and status type) i.e. (Contacted, OPEN) or (Converted, CLOSED) | [optional] 
**lead_source_id** | **int** | Lead Source i.e. web, phone etc | [optional] 
**visible_team_id** | **int** | If VISIBLE_TO is &#39;Team&#39;, then this should be a Team ID, which must be a valid TEAM_ID record locator. | [optional] 
**employee_count** | **int** | Employee count for the lead&#39;s organization | [optional] 
**lead_rating** | **int** | Lead&#39;s Rating | [optional] 
**lead_description** | **string** | Lead&#39;s Description | [optional] 
**visible_user_ids** | **string** | If VISIBLE_TO is &#39;Individuals&#39;, then this should be a comma-separated list of User IDs. This field is always empty in the response. Upon successful POST or PUT an anonymous team is created from the list of IDs, and the response will contain a VISIBLE_TEAM_ID. | [optional] 
**customfields** | [**\Swagger\Client\Model\APICustomField[]**](APICustomField.md) | Set of custom fields attached to the Lead | [optional] 
**address_street** | **string** | Set of addresses attached to the Lead | [optional] 
**address_city** | **string** | Address street attached to the Lead | [optional] 
**address_state** | **string** | Address state attached to the Lead | [optional] 
**address_postcode** | **string** | Address postal code attached to the Lead | [optional] 
**address_country** | **string** | Address country attached to the Lead | [optional] 
**tags** | [**\Swagger\Client\Model\APITag[]**](APITag.md) | Set of tags attached to the Lead | [optional] 
**image_url** | **string** | Url of the Image for the Lead.  Use the &#39;leads/:id/image&#39; endpoint to change the image. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

