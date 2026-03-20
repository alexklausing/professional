# Specification: Sectional Resume UI/UX Revamp

## Objective
Revise the Sectional Resume page (`pages/resume/resume_sec.html`) to align with the "Modern & Airy" professional aesthetic of the website while significantly improving the mobile-first UX, visual polish, and interactivity.

## Scope
- **Modernized Header:** Replace the current static header image with a clean, typography-focused hero section. The "Download Resume" button should be more integrated and professionally styled, mirroring the CTAs on the homepage and about page.
- **Visual Polish & Hierarchy:**
    - **Refined Role Cards:** Enhance the `role-box` layout with better typography, consistent spacing, and subtle shadows.
    - **Typography:** Use the established `font-montserrat` for headings and `font-sans` for body text with improved line-height and letter-spacing for readability.
    - **Color Palette:** Strictly adhere to the project's color palette (Navy Blue, Mid Blue, Coral, Sky White).
- **Interactive UX Refinement (Accordion/Sectional):**
    - **Seamless Transitions:** Implement smooth CSS transitions for toggling company profiles and accomplishments.
    - **Visual Cues:** Improve the toggle icons (e.g., rotating plus/minus or chevron) to provide clear feedback on state.
    - **Sectional Navigation:** Explore a "slick" way to navigate or toggle between major roles or sections, especially on mobile.
- **Mobile-First Optimization:**
    - Ensure all touch targets (buttons, toggles) are at least 44x44px.
    - Optimize the layout for small screens, ensuring logos and text wrap elegantly and legibly.
    - Prioritize a vertical flow that feels native to mobile scrolling.
- **Refined Branding:** Ensure partner logos are displayed with consistent sizing and professional alignment.

## Acceptance Criteria
- The page follows the "Modern & Airy" design style.
- The accordion/sectional functionality is smooth, intuitive, and bug-free.
- The layout is fully responsive and optimized for mobile devices.
- All interactive elements provide clear visual feedback.
- The "Download Resume" CTA is prominent and works correctly.

## Out of Scope
- Rewriting the resume content or accomplishments (focus is on presentation).
- Adding new sections to the resume that aren't already present in the current HTML.
