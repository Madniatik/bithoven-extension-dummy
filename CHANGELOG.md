# Changelog

All notable changes to the Dummy Extension will be documented in this file.

## [1.6.0] - 2025-11-15

### Improved
- **UI/UX Enhancement**: Updated extension card layout with improved action button organization
- Reorganized action buttons for better user experience
- Moved secondary actions (Reinstall, Demo Data, Backups, Uninstall) to dropdown menu
- Primary actions (Enable/Disable, Settings, Update) remain prominently visible
- Cleaner and more professional card design

### Technical
- Optimized button layout using Bootstrap dropdown component
- Improved visual hierarchy in extension management interface
- Better mobile responsiveness with flex-fill classes
- Separated destructive actions (Uninstall) with visual divider

---

## [1.4.3] - 2025-11-14

### Testing
- **Rollback Test Version**: This version intentionally fails during migration to test the rollback mechanism
- ⚠️ **DO NOT USE IN PRODUCTION** - This is a test release only
- Migration `2025_11_14_000005_test_rollback_failure` throws an exception to trigger rollback
- Used to validate that the extension update system properly rolls back failed updates
- Verifies that database backups are restored correctly
- Confirms that the system returns to previous version (v1.4.2) after failure

### Purpose
- Test automatic rollback on migration failure
- Validate backup/restore functionality
- Ensure system stability after failed updates
- Verify error messaging to users

### Expected Behavior
When updating to this version:
1. ✅ Backup created automatically (database, config, views)
2. ✅ Composer updates to v1.4.3
3. ❌ Migration fails with exception
4. ⏮️ System automatically rolls back to v1.4.2
5. 💾 Database restored from backup
6. 🔄 Git repository returns to v1.4.2 tag
7. 📦 Composer downgrades to v1.4.2
8. ⚠️ User sees error: "Update failed - system rolled back to previous version"

**Note**: This release will be deleted after successful rollback testing.

---

## [1.4.0] - 2025-11-14

### Added
- **Status System**: New status field for items workflow tracking
  - Statuses: `pending`, `in_progress`, `completed`, `cancelled`
  - Default status: `pending` for new items
  - Status column indexed for better query performance
  - Status badges with color coding in item listing

### Database
- **Migration Required**: `add_status_to_dummy_items` migration
- Adds `status` enum column to `dummy_items` table
- ⚠️ **This update requires running migrations** - cannot be skipped
- Automatic backup will be created before update

### Testing
- Test scenarios for update validation system
- Migration requirement detection testing
- Rollback mechanism validation

### Technical
- Added `extension.json` with migration metadata
- Migration pattern: `add_*_to_*_table` (detected as required)
- Compatible with new migration requirement validation system

---

## [1.3.1] - 2025-11-13

### Fixed
- **Autoload Configuration**: Added database/seeders to PSR-4 autoload for proper seeder class loading
- Fixed issue where DemoSeeder class was not being found during installation

### Technical
- Updated composer.json autoload section to include seeders namespace
- Seeders now properly registered and executable via ExtensionManager

## [1.3.0] - 2025-11-13

### Added
- **Demo Seeders**: Implemented demo data seeders for quick testing
- `DummyDemoSeeder` - Creates 10 sample items with varied categories and priorities
- `DemoSeeder` - Main seeder class that orchestrates demo data creation
- Seeders can be run during installation via "Run demo seeders" option

### Features
- Sample items showcase all categories (general, important, technical, urgent)
- All priority levels represented (low, normal, high, critical)
- Realistic demo data for testing and demonstrations
- Automatic creation of 10 demo items when enabled during install

## [1.2.1] - 2025-11-13

### Fixed
- **Livewire Duplicate Submission**: Prevent duplicate form submissions with Livewire
- Event delegation implementation to avoid multiple event listener registration
- Added initialization guard with `window.dummyItemsInitialized`
- Submit button disabled during processing
- Modal marked with `wire:ignore.self` for Livewire compatibility

### Technical
- Replaced direct event listeners with event delegation pattern
- Fixed issue where Livewire navigation caused multiple event registrations
- Improved form submission handling with proper state management

## [1.2.0] - 2025-11-13

### Added
- **Priority System**: New priority field for items (low, normal, high, critical)
- Priority badges with color coding (info, primary, warning, danger)
- Priority selector in create/edit forms
- Database migration for priority column with index

### Improved
- Enhanced items table with priority column
- Better visual hierarchy with priority color coding
- Improved data organization capabilities

### Technical
- **Migration**: `add_priority_to_dummy_items` (ALTER TABLE with ENUM and index)
- Updated model fillable attributes
- Enhanced validation in DummyController (store/update methods)
- UI updates with priority badges and selector

## [1.1.0] - 2025-11-13

### Added
- 🎨 Complete sidebar navigation menu with 5 sections
- 📊 Dashboard page with statistics and quick actions
- 📈 Reports page with Chart.js visualizations (pie and bar charts)
- ⚙️ Settings page with configurable options
- ℹ️ About page with extension and system information
- 🏷️ Category field for items (general, important, archived)
- 📦 Bulk delete operations for items
- 💾 CSV export functionality for reports
- 📄 Pagination support (15 items per page)
- 🎯 Recent activity timeline in dashboard

### Improved
- Enhanced items page with better UX and layout
- Better validation messages with category field
- Responsive design improvements across all pages
- Performance optimizations with indexed category column

### Technical
- New migration: `add_category_to_dummy_items`
- 4 new controllers (Dashboard, Reports, Settings, About)
- Layout system with reusable sidebar component
- Chart.js integration for data visualization
- Cache-based settings management
- Proper route organization with grouped prefixes

## [1.0.0] - 2025-11-13

### Added
- Initial release
- Basic CRUD operations for dummy items
- Database migration for `dummy_items` table
- RESTful API endpoints
- Blade views with Metronic theme
- Configuration file
- Service provider with auto-discovery
- Soft deletes support
- Development and testing documentation

### Features
- Create, read, update, delete dummy items
- Status tracking (active/inactive)
- Order management
- Statistics dashboard
- Publishable views and config

## Future Versions

### [1.1.0] - Planned
- Add categories for dummy items
- Implement search functionality
- Add bulk operations
- Export/import features

### [1.2.0] - Planned
- API authentication
- Rate limiting
- Advanced filtering
- Sorting options

### [2.0.0] - Planned
- Complete UI redesign
- Multi-language support
- Advanced permissions
- Audit logging
