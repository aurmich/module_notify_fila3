# Chart Module Documentation

## ⚠️ Important Implementation Notes
- When extending XotBaseResource, getFormSchema() MUST be static
- Correct signature: `public static function getFormSchema(): array`
- Common errors to avoid:
  - DON'T make it protected
  - DON'T make it non-static
  - ALWAYS maintain the same visibility and static status as parent

## MixedChart Model Structure
- Extends: BaseModel
- Fillable Fields:
  - id
  - name
- Relations:
  - charts (morphMany)
  - creator (Profile)
  - updater (Profile)

## Resource Implementation
- Implements XotBaseResource
- Required method: getFormSchema() only (no form() method)
- Form fields based on model structure

## Issues Fixed
- 2025-02-25: Fixed MixedChartResource implementation
  - Removed incorrect form() method
  - Added proper getFormSchema() implementation with model-based fields
