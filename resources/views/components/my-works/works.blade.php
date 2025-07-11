<section id="work" class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <x-heading.heading-2 variant="gradient">My Works</x-heading.heading-2>
            <x-paragraph.paragraph-text variant="centered">
                A showcase of my recent projects and design work.
            </x-paragraph.paragraph-text>
        </div>

        <div class="mb-16">
            <x-heading.heading-3>Web Development Projects</x-heading.heading-3>

            <div class="grid grid-cols sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-my-works.work-card
                    image=""
                    alt="POS Management System"
                    title="POS Management System"
                    description="This Point of Sale (POS) system was built using Laravel and Tailwind CSS. It includes role-based access for Super Admin, Admin, and Staff, a product category filter, an order summary panel, and a responsive layout that works well on desktops and tablets. It's designed to help shops manage sales and inventory easily."
                    :tech="[
                        ['name' => 'Laravel', 'bg' => 'blue-100', 'text' => 'blue-800'],
                        ['name' => 'MySQL', 'bg' => 'yellow-100', 'text' => 'yellow-800'],
                        ['name' => 'JavaScript', 'bg' => 'green-100', 'text' => 'green-800'],
                        ['name' => 'Tailwind', 'bg' => 'blue-100', 'text' => 'blue-500'],
                    ]"
                    detailsUrl=""
                    externalUrl="https://github.com/jcsoliman07/POSManagementSystem"
                />

                <x-my-works.work-card
                    image=""
                    alt="OESCDLB"
                    title="Web-based College Enrollment for Colegio de Los Banos"
                    description="This is an Online Enrollment System built for managing student registration, subject offerings, and approval workflows. It includes features for students, teachers and admin users, such as submitting enrollment requests, viewing subject lists, and managing student records. Designed for schools or training centers, the system helps streamline the enrollment process and reduce manual work."
                    :tech="[
                        ['name' => 'PHP', 'bg' => 'blue-100', 'text' => 'blue-800'],
                        ['name' => 'MySQL', 'bg' => 'yellow-100', 'text' => 'yellow-800'],
                        ['name' => 'JavaScript', 'bg' => 'green-100', 'text' => 'green-800'],
                        ['name' => 'Bootstrap', 'bg' => 'purple-100', 'text' => 'purple-500'],
                    ]"
                    detailsUrl=""
                    externalUrl="https://github.com/jcsoliman07/OESCDLB"
                />
            </div>
        </div>

        <div class="mb-8">
            <x-heading.heading-3>Design Projects</x-heading.heading-3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <x-design-card
                    image=""
                    alt="Facebook Frames"
                    title="Sportsfest Facebook Frames"
                    description=""
                    detailsUrl="#"
                />
            </div>
            
        </div>
    </div>
</section>