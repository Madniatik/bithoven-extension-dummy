# Changelog

All notable changes to the Dummy Extension will be documented in this file.

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
